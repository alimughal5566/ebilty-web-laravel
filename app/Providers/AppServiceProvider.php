<?php

namespace App\Providers;

use App\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.layout.header', function($view) {
            $data=Notification::orderBy('created_at','DESC')->paginate(4);
            $view->with('notifications', $data);

        });
        view()->composer('admin.layout.header', function($view) {
            $count_noti=Notification::where('open_status',0)->orderBy('created_at','DESC')->count();
            $view->with('count_noti',$count_noti);

        });
    }
}
