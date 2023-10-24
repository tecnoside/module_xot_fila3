<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Modules\User\Models\Role;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
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
            /**
             * @var array
             */
            $config = File::getRequire(base_path('Modules/'.$module.'/Config/config.php'));
            $icon = $config['icon'] ?? 'heroicon-o-question-mark-circle';
            $role = $module_low.'::admin';
            $nav = NavigationItem::make($module)
                    ->url('/'.$module_low.'/admin')
                    ->icon($icon)
                    ->group('Modules')
                    ->sort(3)
                    ->visible(function () use ($role) {
                        Assert::notNull($user = Filament::auth()->user());
                        // $user->assignRole('super-admin');
                        // if ($user->hasRole('super-admin')) {
                        //    $role = Role::firstOrCreate(['name' => $role] /*,['id'=>Str::uuid() ]*/);

                        // $res = $user->assignRole($role);
                        // }

                        return $user->hasRole($role);
                    })
            ;

            $navs[] = $nav;
        }

        return $navs;
    }
}
