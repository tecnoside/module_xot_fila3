<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Webmozart\Assert\Assert;
use Spatie\QueueableAction\QueueableAction;

class GetModelClassByModelNameAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $modelName): string
    {
        Assert::isArray($morph_map = config('morph_map'));
        $modelClass= collect($morph_map)->get($modelName);
        if($modelClass==null){
            $modelClass= app(GetFirstModelClassByModelNameAction::class)->execute($modelName);
        }


        return $modelClass;

    }
}
