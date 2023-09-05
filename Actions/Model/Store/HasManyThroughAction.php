<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model\Store;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class HasManyThroughAction
{
    use QueueableAction;

    public function execute(Model $model, \Modules\Xot\DTOs\RelationDTO $relationDTO): void
    {
        dddx('wip');
    }
}
