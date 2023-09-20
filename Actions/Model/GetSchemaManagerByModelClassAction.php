<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Support\Str;

use Spatie\QueueableAction\QueueableAction;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass)
    {
        $model=app($modelClass);
        dddx($model->getConnection());
        /*
        $table=$model->getTable();
        $schemaManager=app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $indexes= $schemaManager->listTableIndexes($table);
        return $indexes;
        */
    }
}
