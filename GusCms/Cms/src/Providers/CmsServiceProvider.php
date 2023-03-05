<?php

namespace GustavoMorais\Cms\Providers;

use Illuminate\Support\ServiceProvider;
use GustavoMorais\Cms\GusCms;
use GustavoMorais\Cms\Commands\CmsCommands;

class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CmsCommands::class,
            ]);
        }

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->app->singleton('guscms', function($app){
            return new GusCms();
        });
    }
}
