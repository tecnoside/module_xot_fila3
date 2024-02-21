<?php
/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Table;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\Action;
use Modules\Xot\Actions\Export\PdfByModelAction;

<<<<<<< HEAD
class PdfAction extends Action
{
    protected function setUp(): void
    {
=======
class PdfAction extends Action {
    protected function setUp(): void {
>>>>>>> cd02905 (up)
        parent::setUp();

        $this->translateLabel()
            ->label('')
            ->tooltip('pdf')
<<<<<<< HEAD
            ->openUrlInNewTab()
=======
>>>>>>> cd02905 (up)
            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-document-arrow-down')
            ->action(fn ($record) => app(PdfByModelAction::class)
                ->execute(model: $record));
    }
}
