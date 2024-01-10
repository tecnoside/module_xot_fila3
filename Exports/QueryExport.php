<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class QueryExport implements FromQuery
{
    use Exportable;
    public array $headings = [];

    public string $transKey;

    public $query;

    public function __construct($query, string $transKey = null)
    {
        $this->query = $query;
    }

    public function headings(): array
    {
        return $this->headings;
    }

    public function query()
    {
        return $this->query->orderBy('id');
    }
}
