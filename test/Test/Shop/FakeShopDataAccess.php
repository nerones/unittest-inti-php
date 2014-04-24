<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 24/04/14
 */
namespace Test\Shop;

use \Salta\Shop\IShopDataAccess;
use \Salta\Shop\Order;
use \ArrayObject;

class FakeShopDataAccess implements IShopDataAccess
{
    private $products;

    public function __construct()
    {
        $this->products = new ArrayObject();
    }

    public function getProductPrice($id)
    {
        $product = $this->findProductById($id);
        if (is_null($product)) {
            throw new Exception("Producto con id: $id, no encontrado");
        }
        return $product->getUnitPrice();
    }

    public function findProductById($id)
    {
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        return null;
    }

    public function save($id, Order $order)
    {
        throw new Exception("Unimplemented method");
    }

    public function getProducts()
    {
        return $this->products;
    }
}
