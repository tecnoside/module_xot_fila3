<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Filter;

use Filament\Facades\Filament;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Filament\Tables\Filters\SelectFilter;

class GetYearFilter {
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $fieldName,int $from,int $to): SelectFilter {
        $opts=[];
        for($curr=$from;$curr<=$to;$curr++){
            $opts[(string)$curr]=(string)$curr;
        }
        $res=SelectFilter::make($fieldName)
            ->options($opts);
        return $res;
    }
}
