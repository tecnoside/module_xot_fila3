<?php

declare(strict_types=1);

namespace Modules\Xot\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
// use Laravel\Scout\Builder as ScoutBuilder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class QueryExport implements FromQuery, ShouldQueue, WithChunkReading
{
    use Exportable;

    public array $headings = [];

    public ?string $transKey = null;

    public $query;

    public function __construct($query, string $transKey = null)
    {
        $this->query = $query;
        $this->transKey = $transKey;
    }

    public function headings(): array
    {
        return $this->headings;
    }

    /**
     * se si usa scout aggiungere |ScoutBuilder.
     *
     * @return Builder|EloquentBuilder|Relation
     */
    public function query()
    {
        return $this->query->orderBy('id');
    }

    public function chunkSize(): int
    {
        return 200;
    }
}
