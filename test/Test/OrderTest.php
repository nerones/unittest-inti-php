<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 */

namespace Test;

use Salta\Shop\Order;
use Salta\Shop\Product;
use Test\Shop\DummyShopDataAccess;
use Test\Shop\StubShopDataAccess;
use Test\Shop\FakeShopDataAccess;
use Test\Shop\SpyShopDataAccess;

class OrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testNull()
    {
        $data = null;
        $order = new Order(1, $data);
    }

    public function testNotNull()
    {
        $data = new DummyShopDataAccess();
        $order = new Order(1, $data);

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

    public function testTotal()
    {
        $data = new StubShopDataAccess();
        $order = new Order(1, $data);
        $order->getOrderLines()->addOrderLine(1, 1);
        $total = $order->getOrderLines()->offsetGet(0)->getTotal();
        $this->assertEquals(25, $total);
    }

    public function testTotalFake1()
    {
        $data = new FakeShopDataAccess();
        $order = new Order(6, $data);
        $product = new Product(1, 140);

        $data->getProducts()->append($product);

        $order->getOrderLines()->addOrderLine(1, 2);

        $total = $order->getOrderLines()->offsetGet(0)->getTotal();
        $this->assertEquals(280, $total);
    }

    public function testSaved()
    {
        $data = new SpyShopDataAccess();
        $order = new Order(4, $data);
        $order->getOrderLines()->addOrderLine(1, 3);
        $order->save();
        $this->assertTrue($data->isSaved());
    }
}
