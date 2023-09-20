<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Modules\Xot\Actions\Model\GetTransKeyByModelClassAction;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
// use Modules\Xot\Services\ArrayService;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;

class XlsByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass, array $where = [], array $includes = [],
        array $excludes = [], callable $callback = null)
    {
        $with = $this->getWithByIncludes($includes);

        $rows = app($modelClass)
            ->with($with)
            ->where($where);

        $rows = $rows->get();
        if ($includes !== []) {
            $rows = $rows->map(function ($item) use ($includes) {
                $data = [];
                foreach ($includes as $include) {
                    $data[$include] = data_get($item, $include);
                }

                return $data;
            });
        }

        if ($excludes !== []) {
            $rows = $rows->makeHidden($excludes);
        }

        if (null != $callback) {
            $rows = $rows->map($callback);
        }
        $transKey = app(GetTransKeyByModelClassAction::class)->execute($modelClass);
        $collectionExport = new CollectionExport($rows, $transKey);
        $filename = $this->getExportName($modelClass);

        return Excel::download($collectionExport, $filename);
    }

    private function getWithByIncludes(array $includes): array
    {
        $with = [];
        foreach ($includes as $include) {
            $tmp = explode('.', (string) $include);
            if (isset($tmp[0]) && Str::contains($include, '.')) {
                $with[] = $tmp[0];
            }
        }

        return $with;
    }

    private function getExportName(string $modelClass): string
    {
        return sprintf(
            '%s %s.xlsx',
            Str::slug(class_basename($modelClass)),
            Carbon::now()->format('d-m-Y His'),
        );
    }
}