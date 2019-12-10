<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $path ='public/panal';
        view::share('css_path',$path.'/css');
        view::share('js_path',$path.'/js');
        view::share('img_path',$path.'/img');
        view::share('plugins_path',$path.'/plugins');
        view::share('boot_path',$path.'/boot');

        view()->composer('*',function($view){
            $user = Auth::user();
            $view->with('auth',$user);
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
