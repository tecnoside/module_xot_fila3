<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Model\GetAllModelsAction;

class GetFirstModelClassByModelNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $modelName): string
    {
        $models=app(GetAllModelsAction::class)->execute();

        Assert::string($modelClass=collect($models)->get($modelName));
        return $modelClass;
    }
}
