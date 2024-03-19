<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Exception;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Filament\Tables\Columns\TextColumn;
use Spatie\QueueableAction\QueueableAction;
use Filament\Tables\Commands\Concerns\CanGenerateTables;
use Filament\Support\Commands\Concerns\CanReadModelSchemas;
use Filament\Actions\Commands\Concerns\CanGenerateImporterColumns;

class GetTableColumnsByModelClassAction
{
    use QueueableAction;
    use CanReadModelSchemas;
    //use CanGenerateImporterColumns;
    use CanGenerateTables;

    /**
     * Undocumented function.
     */
    public function execute(string $model_class): array
    {
        //dddx($this->getImporterColumns($model_class));
        dddx($this->getResourceTableColumns($model_class));


        $model=app($model_class);
        $connectionName = $model->getConnectionName();
        $schema=Schema::connection($connectionName);
        $table=$model->getTable();
        $columns=$schema->getColumns($table);
        $data=[];
        foreach($columns as $column){
            switch($column['type_name']){
                case 'int':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'varchar':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'timestamp':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'datetime':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'decimal':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'float':
                    $data[]=TextColumn::make($column['name']);
                break;

                case 'text':
                    $data[]=TextColumn::make($column['name']);
                break;
                case 'tinyint':
                    $data[]=TextColumn::make($column['name']);
                break;

                default:
                    throw new Exception('type ['.print_r($column,true).'] is not supported ['.__LINE__.']['.__FILE__.']');
                break;
            }
        }
        return $data;
    }
}

/*
"name" => "field_name"
"type_name" => "varchar"
"type" => "varchar(50)"
"collation" => "latin1_swedish_ci"
"nullable" => true
"default" => "NULL"
"auto_increment" => false
"comment" => null
"generation" => null
*/
