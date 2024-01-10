<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\QueryExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByQuery
{
    use QueueableAction;

    public function execute(
        \Staudenmeir\LaravelCte\Query\Builder $query
    ): BinaryFileResponse {
        $queryExport = new QueryExport($query);
        $filename = 'test.xlsx';

        // return Excel::download($collectionExport, $filename);
        return $queryExport->download($filename);
        // return $collectionExport->queue($filename);
        // ->chain([
        //    new NotifyUserOfCompletedExport(request()->user()),
        // ]);
    }
}
