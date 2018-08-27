<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 15/08/18
 * Time: 16:09
 */

namespace BrasilPHP\AdminLte;

use BrasilPHP\AdminLte\Command\InstallCommand;
use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../assets' => public_path(),
        ], 'adminlte:assets');

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'adminlte');
        $this->commands([
            InstallCommand::class
        ]);
    }

    public function register()
    {

    }
}