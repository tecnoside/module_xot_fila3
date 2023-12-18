<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Filament\Panel;


>>>>>>> c605e84 (redirect for who has only a module)

class MainDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';

<<<<<<< HEAD
=======

>>>>>>> c605e84 (redirect for who has only a module)
    /*
    public function __construct(){
        dddx('a'); //1
    }
    */

<<<<<<< HEAD
    public function mount(): void
    {
        Assert::notNull($user = auth()->user());
        $modules = $user->roles->filter(function ($item) {
            return Str::endsWith($item->name, '::admin');
        });

        if (1 == $modules->count()) {
            Assert::notNull($modules->first());
            $panel_name = $modules->first()->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin';
=======
   
    public function mount(){
        $user = auth()->user();
        $modules=($user->roles->filter(function($item){
            return Str::endsWith($item->name, '::admin');
        }));

        if($modules->count()==1){
            $panel_name=$modules->first()->name;
            $module_name=Str::before($panel_name, '::admin');
            $url='/'.$module_name.'/admin/dashboard';
>>>>>>> c605e84 (redirect for who has only a module)
            redirect($url);
        }

        /*
        if (! $user?->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
    }
<<<<<<< HEAD
=======
   

    
    
>>>>>>> c605e84 (redirect for who has only a module)
}
