<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

use Spatie\QueueableAction\QueueableAction;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass)
    {
        $model=app($modelClass);

        $connectionName = $model->getConnectionName();

        
        $a= Schema::connection($connectionName);


        $b=($model->getConnection());
        dddx(['a'=>$a,'b'=>$b]);
        /*
        $table=$model->getTable();
        $schemaManager=app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $indexes= $schemaManager->listTableIndexes($table);
        return $indexes;
        */
    }
}
