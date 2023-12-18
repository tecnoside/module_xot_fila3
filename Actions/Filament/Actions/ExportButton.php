<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament\Actions;

use Filament\Actions\Action;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
class ExportButton
{
    use QueueableAction;

    public function execute(): Action
    {
=======
class ExportButton {
    use QueueableAction;

    public function execute(): Action {
>>>>>>> 7301add (.)
=======
class ExportButton
{
    use QueueableAction;

    public function execute(): Action
    {
>>>>>>> 583b628 (Check & fix styling)
        return Action::make('export')
            ->label('')
            ->tooltip('export XLS')
            ->icon('heroicon-o-inbox-arrow-down')
            // ->visible(null != $year)
            ->action(fn () => dddx('WIP'))
        ;
    }
}
