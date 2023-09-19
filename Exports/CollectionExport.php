<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CollectionExport implements FromCollection, WithHeadings
{
    public array $headings;
    public string $transKey;

    public function __construct(public Collection $collection, string $transKey = null)
    {
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();
        $headings = collect($collection->first())->keys();
        if (null != $transKey) {
            $headings = $headings->map(function ($item) use ($transKey) {
                $key = $transKey.'.fields.'.$item;
                $trans = trans($key);
                if ($trans != $key) {
                    return $trans;
                }
                $key = $transKey.'.fields.'.Str::replace('.', '_', $item);
                $trans = trans($key);
                if ($trans != $key) {
                    return $trans;
                }

                return $item;
            });
        }
        $this->headings = $headings->toArray();
    }

    public function headings(): array
    {
        return $this->headings;
    }

    /**
     * @return Collection
     */
    public function collection()
    {
        return $this->collection;
    }
}
