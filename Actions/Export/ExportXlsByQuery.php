<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Modules\Xot\Exports\QueryExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

// use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByQuery
{
    use QueueableAction;

    public function execute(
        \Staudenmeir\LaravelCte\Query\Builder $query,
        string $filename = 'test.xlsx',
        string $transKey = null,
        array $fields = null
    ): BinaryFileResponse {
        $queryExport = new QueryExport($query, $transKey, $fields);
        // $queryExport->queue($filename); // Serialization of 'PDO' is not allowed

        return $queryExport->download($filename);
    }
}
