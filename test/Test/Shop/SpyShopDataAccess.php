<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 */
namespace Test\Shop;

use \Salta\Shop\IShopDataAccess;
use \Salta\Shop\Order;

class SpyShopDataAccess implements IShopDataAccess
{

    private $saved = false;

    public function getProductPrice($id)
    {
        throw new Exception("Unimplemented method");
    }

    public function save($id, Order $order)
    {
        $this->saved = true;
    }

    public function isSaved()
    {
        return $this->saved;
    }
}
