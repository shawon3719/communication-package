<?php
namespace shawon3719\Communication;

use Illuminate\Support\ServiceProvider;

Class CommunicationServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'communication');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/communication.php', 'communication');
        $this->publishes([
            __DIR__.'/config/communication.php' => config_path('communication.php'),
        ]);
    }

    public function register()
    {
        
    }

}