<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Actions\Filament\Actions\ExportButton;
use Modules\Xot\Actions\Filament\Actions\ImportButton;

/**
 * Undocumented class.
 *
 * @property ?string $model
 */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 583b628 (Check & fix styling)
abstract class XotBaseListRecords extends ListRecords
{
    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
=======
abstract class XotBaseListRecords extends ListRecords {
    protected function getHeaderActions(): array {
>>>>>>> 7301add (.)
=======
>>>>>>> 583b628 (Check & fix styling)
        /*
        $anno=Arr::get($this->tableFilters,'anno.value');
        return [
            Actions\CreateAction::make(),
            app(CopyFromLastYearButton::class)->execute(Assenze::class,'anno',$anno),
        ];
        */
        return [
            app(ExportButton::class)->execute(),
            app(ImportButton::class)->execute(),
        ];
    }
}
