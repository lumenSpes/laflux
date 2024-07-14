<?php

namespace ExtensionsValley\Basetheme;

use Illuminate\Support\ServiceProvider;
use ExtensionsValley\Basetheme\Helpers\ThemeHelper;

class BasethemeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $themeHelper = with(new ThemeHelper);

        if($themeHelper->theme_name == "Basetheme"){
            $this->loadViewsFrom(__DIR__ . '/Views', 'Basetheme');
        }else{
            $this->loadViewsFrom($themeHelper->template_view_path, $themeHelper->theme_name);
        }

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/template/extensionsvalley/basetheme')
        ]);


        $this->publishes([
            __DIR__ . '/../public' => public_path('template/extensionsvalley/basetheme'),
        ]);

        /*$this->publishes([
            __DIR__ . '/Database/migrations' => $this->app->databasePath() . '/migrations',
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/Database/seeds' => $this->app->databasePath() . '/seeds',
        ], 'seeds');*/
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
         // Load all routes
        foreach (new \DirectoryIterator(__DIR__ . '/Routes/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                include __DIR__ . '/Routes/' . $fileInfo->getFilename();
            }
        }
        // Catching up the events
        foreach (new \DirectoryIterator(__DIR__ . '/Events/') as $fileInfo) {
            if (!$fileInfo->isDot()) {
                include __DIR__ . '/Events/' . $fileInfo->getFilename();
            }
        }
    }
}
