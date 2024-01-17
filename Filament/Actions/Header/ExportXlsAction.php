<?php
/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

use Filament\Actions\Action;
// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Modules\Xot\Actions\Export\ExportXlsByLazyCollection;
use Modules\Xot\Actions\Export\ExportXlsByQuery;
use Modules\Xot\Actions\Export\ExportXlsStreamByLazyCollection;

class ExportXlsAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'export_xls';
    }

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
            ->action(function (HasTable $livewire) {
                $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
                $module = Str::of(get_class($livewire))->between('Modules\\', '\Filament\\')->lower()->toString();
                $transKey = $module.'::'.Str::of(class_basename($livewire))
                    ->kebab()
                    ->replace('list-', '')
                    ->singular()
                    ->append('.fields')
                    ->toString();

                // $query = $livewire->getFilteredTableQuery()->getQuery(); // Staudenmeir\LaravelCte\Query\Builder

                $resource = $livewire->getResource();
                $fields = null;
                if (method_exists($resource, 'getXlsFields')) {
                    $fields = $resource::getXlsFields($livewire->tableFilters);
                }

                $lazy = $livewire->getFilteredTableQuery();
                if (null != $fields) {
                    // $lazy = $lazy->select($fields);
                }
                if ($lazy->count() < 7) {
                    $query = $lazy->getQuery();

                    return app(ExportXlsByQuery::class)->execute($query, $filename, $transKey, $fields);
                }

                $lazy = $lazy
                    ->cursor(); // Illuminate\Support\LazyCollection

                if ($lazy->count() > 10000) {
                    return app(ExportXlsStreamByLazyCollection::class)->execute($lazy, $filename, $transKey, $fields);
                }

                return app(ExportXlsByLazyCollection::class)->execute($lazy, $filename, $transKey, $fields);
            });

        // ->hidden(fn ($record) => Gate::denies('changePriority', $record))
        /*
        ->form([
            Select::make('priority_id')
                ->translateLabel()
                ->label('camping::operation.fields.priority')
                ->relationship(
                    name: 'priority',
                    titleAttribute: 'name',
                    modifyQueryUsing: fn (Builder $query) => $query->orderByDesc('level'),
                )
                ->preload()
                ->searchable(),
        ])
        ->action(function (Operation $record, $data) {
            $record->priority_id = $data['priority_id'];
            $record->save();
        })
        ->modalSubmitActionLabel(trans('camping::operation.actions.save'));
        */
    }
}
