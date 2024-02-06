<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CollectionExport implements FromCollection, WithHeadings, ShouldQueue,WithMapping
{
    use Exportable;
    public array $headings;

    public ?string $transKey;
    public ?array $fields = null;

    public function __construct(
        public Collection $collection,
        string|null $transKey = null,
        array|null $fields = null)
    {
       $this->transKey=$transKey;
       $this->fields=$fields;
    }

    public function getHead():Collection{
        if(is_array($this->fields)){
            return collect($this->fields);
        }
        
        /**
         * @var array
         */
        $head = $this->collection->first();
        return collect($head)->keys();
        
    }

    public function headings(): array
    {
        
        $headings=$this->getHead();
        $transKey = $this->transKey;
        if (null !== $transKey) {
            $headings = $headings->map(
                function (string $item) use ($transKey) {
                    $key = $transKey.'.fields.'.$item;
                    $trans = trans($key);
                    if ($trans !== $key) {
                        return $trans;
                    }

                    Assert::string($item1 = Str::replace('.', '_', $item));
                    $key = $transKey.'.fields.'.$item1;
                    $trans = trans($key);
                    if ($trans !== $key) {
                        return $trans;
                    }

                    return $item;
                }
            );
        }
        
       
       
        return $headings->toArray();
    }

    public function collection(): Collection
    {
      
        return $this->collection;
    }

     /**
    * @param object $item
    */
    public function map($item): array
    {
        if($this->fields==null){
            return collect($item)->toArray();
        }
        return collect($item)->only($this->fields)->toArray();
       
        
    }
}
