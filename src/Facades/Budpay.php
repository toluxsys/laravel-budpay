<?php

/*
 * This file is part of the Laravel Budpay package.
 *
 * (c) Tolulope Oyeniyi <toluxsys@yahoo.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace toluxsys\Budpay\Facades;

use Illuminate\Support\Facades\Facade;

class Budpay extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-budpay';
    }
}
