<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromIterator;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Webmozart\Assert\Assert;

class LazyCollectionExport implements FromIterator, WithHeadings, ShouldQueue
{
    use Exportable;

    public array $headings;

    public string $transKey;

    public function __construct(public LazyCollection $collection, string $transKey = null)
    {
        // $this->headings = count($headings) > 0 ? $headings : collect($collection->first())->keys()->toArray();
        /**
         * @var array
         */
        $head = $collection->first();
        $headings = collect($head)->keys();
        if (null !== $transKey) {
            $headings = $headings->map(function (string $item) use ($transKey) {
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
            });
        }

        $this->headings = $headings->toArray();
    }

    public function headings(): array
    {
        return $this->headings;
    }

    public function collection(): LazyCollection
    {
        return $this->collection;
    }

    public function iterator(): \Iterator
    {
        return $this->collection->getIterator();
    }
}
