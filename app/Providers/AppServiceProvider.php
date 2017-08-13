<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator; 


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

     Validator::extend('resolution', function($attribute, $value, $parameters, $validator) {

        list($width, $height) = getimagesize($value);
        $size   ="h".$height."w".$width;

        foreach ($parameters as $value) {
            if ($value == $size) {
                return true;
                break;
            }
        }
        return false;
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
