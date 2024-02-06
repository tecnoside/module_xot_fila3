<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Support\Collection;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
// use Laravel\Scout\Builder as ScoutBuilder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\Xot\Actions\Export\TransCollectionAction;
use Staudenmeir\LaravelCte\Query\Builder as CteBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class QueryExport implements FromQuery, ShouldQueue, WithHeadings, WithChunkReading, WithMapping
{
    use Exportable;

    public array $headings = [];
    public ?array $fields = null;

    public ?string $transKey = null;

    /**
     * @var CteBuilder|Builder
     */
    public $query;

    /**
     * @param CteBuilder|Builder $query
     */
    public function __construct($query, ?string $transKey = null, ?array $fields = null)
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        /*
        $this->headings = collect($query->first())
            ->keys()
            ->map(
                function ($item) use ($transKey) {
                    $t = $transKey.'.'.$item;
                    $trans = trans($t);
                    if ($trans != $t) {
                        return $trans;
                    }

                    return $item;
                }
            )
            ->toArray();
        */
    }

    public function getHead():Collection{
        if(is_array($this->fields)){
            return collect($this->fields);
        }
        /**
         * @var \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null 
         */
        $first=$this->query->first();
        if($first==null){
            return collect([]);
        }
        //Parameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($first)->keys();
        
    }

    public function headings(): array
    {
        $headings=$this->getHead();
        $transKey = $this->transKey;
        $headings=app(TransCollectionAction::class)->execute($headings,$transKey);
        return $headings->toArray();
    }

    /**
     * se si usa scout aggiungere |ScoutBuilder.
     *
     * @return Builder|EloquentBuilder|Relation
     */
    public function query()
    {
        return $this->query->orderBy('id');
    }

    public function chunkSize(): int
    {
        return 200;
    }

     /**
    * @param \Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null $item
    */
    public function map($item): array
    {
        if($this->fields==null){
            return collect($item)->toArray();
        }
        //rameter #1 $value of function collect expects Illuminate\Contracts\Support\Arrayable<(int|string), mixed>|iterable<(int|string), mixed>|null, object given.
        return collect($item)
            ->only($this->fields)
            ->toArray();
       
        
    }
}
