<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Webmozart\Assert\Assert;
use Nwidart\Modules\Facades\Module;
use Spatie\QueueableAction\QueueableAction;
use Modules\Xot\Actions\Model\GetAllModelsByModuleNameAction;

class GetAllModelsAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(): array
    {
        $res = [];
        $modules = Module::all();
        foreach ($modules as $module) {
            $tmp = app(GetAllModelsByModuleNameAction::class)->execute($module->getName());
            $res = array_merge($res, $tmp);
        }

        return $res;

    }
}
