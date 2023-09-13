<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Filament\Navigation\NavigationItem;
use Modules\Tenant\Services\TenantService;
use Spatie\QueueableAction\QueueableAction;

class GetModulesNavigationItems
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute():array
    {
        $navs = [];
        $modules = TenantService::allModules(); // app('modules') da errore su container Cache
        foreach ($modules as $module) {
            $module_low = Str::lower($module);
            $config = File::getRequire(base_path('Modules/'.$module.'/Config/config.php'));
            $icon = $config['icon'] ?? 'heroicon-o-question-mark-circle';

            $navs[] = NavigationItem::make($module)
                    ->url('/'.$module_low.'/admin')
                    ->icon($icon)
                    ->group('Modules')
                    ->sort(3);
        }
        return $navs;
    }
}