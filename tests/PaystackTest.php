<?php

/*
 * This file is part of the Laravel Budpay package.
 *
 * (c) Tolulope Oyeniyi <toluxsys@yahoo.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace toluxsys\Budpay\Test;

use Mockery as m;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use toluxsys\budpay\Budpay;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Facade as Facade;

class budpayTest extends TestCase
{
    protected $budpay;

    public function setUp(): void
    {
        $this->budpay = m::mock('toluxsys\Budpay\Budpay');
        $this->mock = m::mock('GuzzleHttp\Client');
    }

    public function tearDown(): void
    {
        m::close();
    }

    public function testAllCustomersAreReturned()
    {
        $array = $this->budpay->shouldReceive('getAllCustomers')->andReturn(['prosper']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllTransactionsAreReturned()
    {
        $array = $this->budpay->shouldReceive('getAllTransactions')->andReturn(['transactions']);

        $this->assertEquals('array', gettype(array($array)));
    }

    public function testAllPlansAreReturned()
    {
        $array = $this->budpay->shouldReceive('getAllPlans')->andReturn(['intermediate-plan']);

        $this->assertEquals('array', gettype(array($array)));
    }
}
