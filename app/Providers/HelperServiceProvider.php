<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Source: https://slick.pl/kb/laravel/add-your-custom-helpers-in-laravel-5/

class HelperServiceProvider extends ServiceProvider {

   /**
    * Bootstrap the application services.
    *
    * @return void
    */
   public function boot()
   {
      //
   }

   /**
    * Register the application services.
    *
    * @return void
    */
   public function register()
   {
        foreach (glob(app_path().'/Helpers/*.php') as $filename){
            require_once($filename);
        }
   }
}