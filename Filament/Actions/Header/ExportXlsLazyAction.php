<?php

/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Actions\Export\ExportXlsByLazyCollection;
use Modules\Xot\Actions\Export\ExportXlsByQuery;
use Modules\Xot\Actions\Export\ExportXlsStreamByLazyCollection;
use Modules\Xot\Actions\GetTransKeyAction;

class ExportXlsLazyAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->translateLabel()
            // ->label('xot::actions.export_xls')
            ->label('')
            ->tooltip(__('xot::actions.export_xls'))

            // ->icon('heroicon-o-cloud-arrow-down')
            // ->icon('fas-file-excel')
            ->icon('heroicon-o-arrow-down-tray')
            ->action(static function (ListRecords $livewire) {
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
                $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                $transKey .= '.fields';
                // $query = $livewire->getFilteredTableQuery()->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                // dddx($query->get());

                $resource = $livewire->getResource();
                $fields = null;
                if (method_exists($resource, 'getXlsFields')) {
                    $fields = $resource::getXlsFields($livewire->tableFilters);
                }

                $lazy = $livewire->getFilteredTableQuery();
                if (null !== $fields) {
                    // $lazy = $lazy->select($fields);
                }
                if ($lazy->count() < 7) {
                    $query = $lazy->getQuery();

                    return app(ExportXlsByQuery::class)->execute($query, $filename, $transKey, $fields);
                }

                $lazy = $lazy
                    ->cursor();
                // Illuminate\Support\LazyCollection

                if ($lazy->count() > 3000) {
                    return app(ExportXlsStreamByLazyCollection::class)->execute($lazy, $filename, $transKey, $fields);
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazy, $filename, $transKey, $fields);
            });
    }

    public static function getDefaultName(): ?string
    {
        return 'export_xls';
    }
}
