<?php

namespace Modules\Xot\Actions\Filament\Actions;
use Filament\Actions\Action;

use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\ModelClass\CopyFromLastYearAction;


class CopyFromLastYearButton{
     use QueueableAction;

    public function execute(string $modelClass, string $fieldName,?string $year)
    {
        return Action::make('copy_from_last_year')
            ->label('')
            ->tooltip('copy from last year')
            ->icon('heroicon-o-document-duplicate')
            ->visible($year!=null)
            ->action(fn()
                =>app(CopyFromLastYearAction::class)->execute($modelClass,$fieldName,$year))
            ;
    }
}
