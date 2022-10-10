<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Illuminate\Support\Facades\Session;

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
        Inertia::share([
            'errors' => function(){
                return Session::get(key:'errors')
                ?Session::get(key:'errors')->getBag('default')->getMessages()
                : (object) [];
            }
        ]);

        Inertia::share('flash' ,function(){
            return[
                'message'=>Session::get('message'),
            ];
        });

        Inertia::share('csrf_token', function(){
            return csrf_token();
        });
    }
}
