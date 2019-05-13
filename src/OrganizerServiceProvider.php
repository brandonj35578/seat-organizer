<?php

namespace Brandon\Seat\Organizer;

use Illuminate\Support\ServiceProvider;

class OrganizerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->add_views();
        $this->add_routes();
    }

    /**
     * Set the path and namespace for the views.
     */
    public function add_views()
    {

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'organizer');
    }

    /**
     * Include the routes.
     */
    public function add_routes()
    {

        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/organizer.config.php', 'organizer.config');

        // Include this packages menu items
        $this->mergeConfigFrom(
            __DIR__ . '/Config/package.sidebar.php', 'package.sidebar');

        // Add new permissions
        $this->mergeConfigFrom(
            __DIR__ . '/Config/organizer.permissions.php', 'organizer.permissions');
    }
}
