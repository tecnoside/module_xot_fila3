<?php

declare(strict_types=1);

namespace Modules\Xot\Providers\Filament;

use Filament\Facades\Filament;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;

abstract class XotBasePanelProvider extends PanelProvider
{
    protected string $module;

    public function panel(Panel $panel): Panel
    {
        $moduleNamespace = $this->getModuleNamespace();
        $moduleLow = Str::lower($this->module);

        // if (! in_array($moduleLow,['chart','xot'])) {
        //    dddx([$moduleNamespace, $moduleLow]);
        // }

        $panel = $panel
            ->id($moduleLow.'::admin')
            ->path($moduleLow.'/admin')
            ->colors([
                'primary' => Color::Teal,
            ])
            ->discoverResources(in: base_path('Modules/'.$this->module.'/Filament/Resources'), for: sprintf('%s\Filament\Resources', $moduleNamespace))
            ->discoverPages(in: base_path('Modules/'.$this->module.'/Filament/Pages'), for: sprintf('%s\Filament\Pages', $moduleNamespace))
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: base_path('Modules/'.$this->module.'/Filament/Widgets'), for: sprintf('%s\Filament\Widgets', $moduleNamespace))
            ->widgets([
                AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);

        /*
        $adminPanel = Filament::getPanel('admin');

        $adminPanel
         ->navigationItems([
             NavigationItem::make('Jobs')
                 ->url($panel->getUrl(), shouldOpenInNewTab: false)
                 ->icon('heroicon-o-users')
                 ->group('Modules')
                 ->sort(3),
         ]);
        */

        return $panel;
    }

    protected function getModuleNamespace(): string
    {
        return config('modules.namespace').'\\'.$this->module;
    }
}
