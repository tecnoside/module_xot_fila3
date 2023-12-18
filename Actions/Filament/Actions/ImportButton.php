<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Actions;

use Filament\Actions\Action;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
class ImportButton
{
    use QueueableAction;

    public function execute(): Action
    {
=======
class ImportButton {
    use QueueableAction;

    public function execute(): Action {
>>>>>>> 7301add (.)
        return Action::make('import')
            ->label('')
            ->tooltip('import XLS')
            ->icon('heroicon-o-arrow-up-on-square')
            // ->visible(null != $year)
            ->action(fn () => dddx('WIP'))
        ;
    }
}
