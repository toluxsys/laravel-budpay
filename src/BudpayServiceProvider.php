<?php

/*
 * This file is part of the Laravel Budpay package.
 *
 * (c) Tolulope Oyeniyi <toluxsys@yahoo.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace toluxsys\Budpay;

use Illuminate\Support\ServiceProvider;

class BudpayServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
        $config = realpath(__DIR__ . '/../resources/config/budpay.php');

        $this->publishes([
            $config => config_path('budpay.php')
        ]);
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('laravel-budpay', function () {

            return new Budpay;

        });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-budpay'];
    }
}
