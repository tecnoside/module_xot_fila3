<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Illuminate\Support\Str;

use Spatie\QueueableAction\QueueableAction;

class GetTableIndexesByModelClassAction
{
    use QueueableAction;

    /**
     * @return array<\Doctrine\DBAL\Schema\Index>
     */
    public function execute(string $modelClass): array
    {
        $model=app($modelClass);
        $table=$model->getTable();
        $schemaManager=app(GetSchemaManagerByModelClassAction::class)->execute($modelClass);
        $indexes= $schemaManager->listTableIndexes($table);
        return $indexes;
    }
}
