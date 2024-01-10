<?php
/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions;

use Filament\Actions\Action;
// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Gate;
use Modules\Xot\Actions\Export\ExportXlsByCollection;

class ExportXlsAction extends Action {
    public static function getDefaultName(): ?string {
        return 'export_xls';
    }

    protected function setUp(): void {
        parent::setUp();

        $this->translateLabel()
            ->label('xot::actions.export_xls')
            // ->icon('heroicon-o-cloud-arrow-down')
            ->icon('fas-file-excel')
            ->action(function (Collection $records, $data, $livewire) {
                $table_records = $livewire->getTableRecords();
                //dddx($table_records->perPage(1000));
                //$table_records->setCurrentPage(2);
                //dddx($table_records->forPage(1,1000));
                $results = new Collection();
                $start = 1;
                /*
                while ($start++ <= $table_records->lastPage()) {
                    foreach ($table_records->getCollection() as $item) {
                        $results->push($item);
                    }
                    dddx($table_records);
                    $table_records->setCurrentPage($start);
                }
                */

                // return app(ExportXlsByCollection::class)->execute($results);

                dddx([
                    //'results' => $results,
                    // 'records'=>$records,
                    // 'data'=>$data,
                    // 'livewire'=>$livewire,

                    'getAllTableRecordsCount' => $livewire->getAllTableRecordsCount(),
                    // 'getTableRecords'=>$table_records,
                    //'t2' => $table_records->getCollection(),
                    'items'=>$table_records->items(),
                    'lw methods' => get_class_methods($table_records),
                ]);
                // */
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
