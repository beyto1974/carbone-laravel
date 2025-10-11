<?php

namespace Beyto\CarboneLaravel;

use Carboneio\SDK\Carbone;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CarboneLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('carbone-laravel')
            ->hasConfigFile('carbone');
    }

    public function register()
    {
        parent::register();

        $this->app->singleton(Carbone::class, function ($app) {
            $config = $app['config']['carbone'];

            return new Carbone($config['api_key'], $config['base_url']);
        });

        $this->app->alias(Carbone::class, 'carbone');
    }
}
