<?php

namespace Martins\ArtisanGUI;

use Illuminate\Support\ServiceProvider;

class ArtisanGUIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->publishes([__DIR__ . '/CheckForMaintenanceModeCostum.php' => app_path('Http/Middleware/CheckForMaintenanceModeCostum.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'gui');
        $this->publishes([__DIR__ . '/artisan-gui-configs.php' => config_path("artisan-gui-configs.php")]);

        if(file_exists(__DIR__ . '/Kernel.php')){
            rename(__DIR__ . '/Kernel.php', app_path('Http/Kernel.php'));
        }
    }
}
