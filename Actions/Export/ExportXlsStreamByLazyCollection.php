<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;

use function Safe\fclose;
use function Safe\fopen;
use function Safe\fputcsv;

use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class ExportXlsStreamByLazyCollection
{
    use QueueableAction;

    public function execute(
        LazyCollection $data,
        string $filename = 'test.csv',
        string $transKey = null,
        array $fields = null
    ) {
        $headers = [
            'Content-Disposition' => 'attachment; filename='.$filename,
        ];
        $head = $this->headings($data, $transKey);

        return response()->stream(
            function () use ($data, $head) {
                $file = fopen('php://output', 'w+');
                fputcsv($file, $head);

                foreach ($data as $key => $value) {
                    $data = $value->toArray();
                    fputcsv($file, $data);
                }
                $blanks = ["\t", "\t", "\t", "\t"];
                fputcsv($file, $blanks);
                $blanks = ["\t", "\t", "\t", "\t"];
                fputcsv($file, $blanks);
                $blanks = ["\t", "\t", "\t", "\t"];
                fputcsv($file, $blanks);

                fclose($file);
            }, 200, $headers
        );
    }

    public function headings(LazyCollection $data, string $transKey = null): array
    {
        /**
         * @var array
         */
        $head = $data->first();
        $headings = collect($head)->keys();
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

        $headings = $headings->toArray();

        return $headings;
    }
}
