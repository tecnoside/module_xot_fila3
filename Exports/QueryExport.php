<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
// use Laravel\Scout\Builder as ScoutBuilder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QueryExport implements FromQuery, ShouldQueue, WithHeadings, WithChunkReading
{
    use Exportable;

    public array $headings = [];
    public ?array $fields = null;

    public ?string $transKey = null;

    /**
     * @var \Staudenmeir\LaravelCte\Query\Builder
     */
    public $query;

    /**
     * @param \Staudenmeir\LaravelCte\Query\Builder $query
     */
    public function __construct($query, string $transKey = null, array $fields = null)
    {
        $this->query = $query;
        $this->transKey = $transKey;
        $this->fields = $fields;

        $this->headings = collect($query->first())
            ->keys()
            ->map(function ($item) use ($transKey) {
                $t = $transKey.'.'.$item;
                $trans = trans($t);
                if ($trans != $t) {
                    return $trans;
                }

                return $item;
            })
            ->toArray();
    }

    public function headings(): array
    {
        return $this->headings;
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
}
