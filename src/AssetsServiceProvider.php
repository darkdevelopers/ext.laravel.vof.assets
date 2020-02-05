<?php
/**
 * @author     Marco Schauer <marco.schauer@darkdevelopers.de.de>
 * @copyright  2019 Marco Schauer
 */

namespace Vof\Assets;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;

/**
 * Class AssetsServiceProvider
 * @package Vof\Assets
 */
class AssetsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'vof.admin.assets');
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'vof.admin.assets');
        //$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__.'/assets/css' => public_path('css/vof.admin'),
        ], 'ext.laravel.vof.assets');
    }

    public function register()
    {

    }
}
