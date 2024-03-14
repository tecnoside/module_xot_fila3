<?php
/**
 * @see https://coderflex.com/blog/create-advanced-filters-with-filament
 */

declare(strict_types=1);

namespace Modules\Xot\Filament\Actions\Header;

// Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
// use Filament\Tables\Actions\Action;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Actions\GetTransKeyAction;
use Modules\Xot\Actions\Export\ExportXlsByCollection;

class FakeSeederHeaderAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel()
            ->label('')
            ->tooltip(__('xot::actions.fake_seeder'))
            ->icon('fas-seedling')
            ->form([
                TextInput::make('qty')
                    ->required(),
            ])
            ->action(
                function (array $data,ListRecords $livewire) {
                    $resource = $livewire->getResource();
                    $modelClass=$resource::getModel();
                    
                    /*
                    $filename = class_basename($livewire).'-'.collect($livewire->tableFilters)->flatten()->implode('-').'.xlsx';
                    $transKey = app(GetTransKeyAction::class)->execute($livewire::class);
                    $transKey .= '.fields';
                    $query = $livewire->getFilteredTableQuery(); // ->getQuery(); // Staudenmeir\LaravelCte\Query\Builder
                    $rows = $query->get();

                    
                    $fields = null;
                    if (method_exists($resource, 'getXlsFields')) {
                        $fields = $resource::getXlsFields($livewire->tableFilters);
                    }

                    return app(ExportXlsByCollection::class)->execute($rows, $filename, $transKey, $fields);
                    */
                    $qty=intval($data['qty']);
                    dddx([
                        'a'=>$modelClass::factory()->count($qty)->make(),
                    ]);
                }
            );
    }

    public static function getDefaultName(): ?string
    {
        return 'fake_seeder';
    }
}
