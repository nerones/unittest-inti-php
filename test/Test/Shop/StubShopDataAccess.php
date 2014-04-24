<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 */
namespace Test\Shop;

use \Salta\Shop\IShopDataAccess;
use \Salta\Shop\Order;


class StubShopDataAccess  implements IShopDataAccess
{

    public function getProductPrice($id)
    {
        return 25;
    }

    public function save($id, Order $order)
    {
        throw new Exception("Unimplemented method");
    }
}
