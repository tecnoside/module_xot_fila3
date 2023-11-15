<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

use Spatie\QueueableAction\QueueableAction;

class CopyFromLastYearAction
{
    use QueueableAction;

    public function execute(string $modelClass, string $fieldName, ?string $year)
    {
        $rows_year = $modelClass::where([$fieldName => intval($year)])->get();
        $rows_last_year = $modelClass::where([$fieldName => intval($year) - 1])->get();
        if ($rows_year->count() > 0) {
            return;
        }
        foreach ($rows_last_year as $row) {
            $data = collect($row->toArray())
                ->except($row->getKeyName())
                ->toArray();
            $data[$fieldName] = $year;
            $up = $modelClass::create($data);
        }
    }
}
