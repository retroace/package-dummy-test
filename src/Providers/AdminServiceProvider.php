<?php
namespace RetroAce\PackageDummyTest\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class AdminServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        if (in_array('retro.admin', config('modules.enabled'))) {
            //Registering RouteServiceProvider
            $this->app->register('App\Modules\Admin\RouteServiceProvider');

            //Adding admin middleware to a group middleware
            $this->app->router->pushMiddlewareToGroup('admin', \App\Modules\Admin\Middleware\AdminMiddleware::class);

            if (!in_array('\App\Modules\Admin\Middleware\AdminMiddleware', app()->getLoadedProviders())) {
                throw new \Exception('Sorry the middleware couldnot be registered');
            }

            $this->loadRoutesFrom(__DIR__ . "/Routes/web.php");

            $this->loadMigrationsFrom(__DIR__ . "/Migrations");

            /**
             * Dynamically adding route loading path and adding namespace
             */
            $this->loadViewsFrom(__DIR__ . "/Resources/views", 'admin');
            $this->app['view']->addLocation(app_path('Modules/Admin/Resources/views'));


            $this->mergeConfigFrom(
                __DIR__ . '/Config/AdminConfig.php',
                'admin'
            );
        }
    }
}
