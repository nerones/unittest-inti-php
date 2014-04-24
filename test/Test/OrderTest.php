<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 * Time: 00:59
 */

namespace Test;


use Salta\Shop\Order;
use Test\Shop\DummyShopDataAccess;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    public function testNotNull()
    {
        $data = new DummyShopDataAccess();
        $order = new Order(1,$data);

        $this->assertNotNull($order);
    }

    public  function testSize()
    {
        $data = new DummyShopDataAccess();
        $o = new Order(1, $data);
        $o->getOrderLines()->addOrderLine(1, 3);
        $o->getOrderLines()->addOrderLine(2, 1);
        $this->assertEquals(2, $o->getOrderLines()->count());
    }

} 