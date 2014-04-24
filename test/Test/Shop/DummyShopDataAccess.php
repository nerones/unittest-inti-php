<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 * Time: 01:04
 */
namespace Test\Shop;

use \Salta\Shop\IShopDataAccess;
use \Salta\Shop\Order;


class DummyShopDataAccess  implements IShopDataAccess
{

    public function getProductPrice($id)
    {
        // TODO: Implement getProductPrice() method.
    }

    public function save($id, Order $order)
    {
        // TODO: Implement save() method.
    }
}