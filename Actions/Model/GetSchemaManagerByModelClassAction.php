<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Spatie\QueueableAction\QueueableAction;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass): string
    {
        $model = app($modelClass);
        $connection = $model->getConnection();

        return $connection->getDoctrineSchemaManager();
    }
}
