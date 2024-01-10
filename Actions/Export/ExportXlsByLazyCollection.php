<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Support\LazyCollection;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\LazyCollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByLazyCollection
{
    use QueueableAction;

    public function execute(
        LazyCollection $collection
    ): BinaryFileResponse {
        $collectionExport = new LazyCollectionExport($collection);
        $filename = 'test.xlsx';

        // return Excel::download($collectionExport, $filename);
        return $collectionExport->download($filename);
        // return $collectionExport->queue($filename);
        // ->chain([
        //    new NotifyUserOfCompletedExport(request()->user()),
        // ]);
    }
}
