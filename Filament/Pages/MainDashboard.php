<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Filament\Panel;


>>>>>>> c605e84 (redirect for who has only a module)
=======
use Illuminate\Support\Str;
>>>>>>> b2ca65e (Check & fix styling)

class MainDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'xot::filament.pages.dashboard';

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> c605e84 (redirect for who has only a module)
=======
>>>>>>> b2ca65e (Check & fix styling)
    /*
    public function __construct(){
        dddx('a'); //1
    }
    */

<<<<<<< HEAD
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
            $url = '/'.$module_name.'/admin/dashboard';
=======
   
    public function mount(){
=======
    public function mount()
    {
>>>>>>> b2ca65e (Check & fix styling)
        $user = auth()->user();
        $modules = $user->roles->filter(function ($item) {
            return Str::endsWith($item->name, '::admin');
        });

<<<<<<< HEAD
        if($modules->count()==1){
            $panel_name=$modules->first()->name;
            $module_name=Str::before($panel_name, '::admin');
            $url='/'.$module_name.'/admin/dashboard';
>>>>>>> c605e84 (redirect for who has only a module)
=======
        if (1 == $modules->count()) {
            $panel_name = $modules->first()->name;
            $module_name = Str::before($panel_name, '::admin');
            $url = '/'.$module_name.'/admin/dashboard';
>>>>>>> b2ca65e (Check & fix styling)
            redirect($url);
        }

        /*
        if (! $user?->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
   

    
    
>>>>>>> c605e84 (redirect for who has only a module)
=======
>>>>>>> b2ca65e (Check & fix styling)
}
