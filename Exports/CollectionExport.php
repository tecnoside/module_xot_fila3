<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CollectionExport implements FromCollection, WithHeadings
{
    public Collection $collection;
    public array $headings;

    public function __construct(Collection $collection, array $headings = [])
    {
        $this->collection = $collection;
        $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();
    }

    public function headings(): array
    {
        return $this->headings;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->collection;
    }
}
