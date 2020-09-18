<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 5a998a0445783be12403f43d8d03ccf5cc680b17

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
<<<<<<< HEAD
    public function register(){
        //add this
        Schema::defaultStringLength(191);
=======
    public function register()
    {
        //
>>>>>>> 5a998a0445783be12403f43d8d03ccf5cc680b17
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
