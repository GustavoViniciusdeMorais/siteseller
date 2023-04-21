<?php

namespace GustavoMorais\Cms\Providers;

use Illuminate\Support\ServiceProvider;
use GustavoMorais\Cms\GusCms;
use GustavoMorais\Cms\Commands\CmsCommands;
use GustavoMorais\Cms\LogFacade;
use GustavoMorais\Cms\PostsFacade;

class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CmsCommands::class,
            ]);
        }

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishes([
            __DIR__.'/../../database/seeders' => database_path('seeders'),
        ], 'cms-seeders');
    }

    public function register()
    {
        $this->app->singleton('guscms', function($app){
            return new GusCms();
        });
        
        $this->app->singleton('logfacade', function($app){
            return new LogFacade();
        });

        $this->app->singleton('postsfacade', function($app){
            return new PostsFacade();
        });
    }
}
