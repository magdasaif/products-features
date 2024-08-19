<?php
namespace Magdasaif\ProductFeatures\app\providers; 

use Illuminate\Support\ServiceProvider;

class ProductFeatureServiceProvider extends ServiceProvider
{
    public function boot(){
        //==============================================================================================
        //to load package routes in any project background
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        //to load package migrations files in any project background
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        //to handle publish step for migrations file 
        $this->publishes([
            __DIR__.'/../../database/migrations' => database_path('migrations')
        ], 'product-migrations');
        //==============================================================================================
    }

    public function register(){
        
    }
}