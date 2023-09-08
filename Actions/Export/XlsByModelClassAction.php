<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
// use Modules\Xot\Services\ArrayService;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;

class XlsByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass, array $where = [])
    {
        $rows = app($modelClass)
            ->where($where)
            ->get();

        $collectionExport = new CollectionExport($rows);
        $filename = Str::slug(class_basename($modelClass)).'.xlsx';

        return Excel::download($collectionExport, $filename);
    }
}
