<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;
use Spatie\QueueableAction\QueueableAction;

class GetModulesNavigationItems
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(): array
    {
        $navs = [];
        $modules = TenantService::allModules(); // app('modules') da errore su container Cache
        foreach ($modules as $module) {
            // if (! Filament::auth()->check()) {
            //    continue;
            // }
            $module_low = Str::lower($module);
            // Target class [hash] does not exist.
            // if (! auth()->user()->can('module_'.$module_low)) {
            //    continue;
            // }
            // dddx(Auth::id());

            $config = File::getRequire(base_path('Modules/'.$module.'/Config/config.php'));
            $icon = $config['icon'] ?? 'heroicon-o-question-mark-circle';

            $nav = NavigationItem::make($module)
                    ->url('/'.$module_low.'/admin')
                    ->icon($icon)
                    ->group('Modules')
                    ->sort(3)
                    ->visible(fn () => Filament::auth()->user()->hasRole($module_low.'::admin'));

            $navs[] = $nav;
        }

        return $navs;
    }
}
