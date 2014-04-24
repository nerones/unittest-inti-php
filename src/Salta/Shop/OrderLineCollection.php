<?php

namespace Salta\Shop;

use Salta\Shop\Order;

class OrderLineCollection extends \ArrayObject
{
    private $order;

    public function __construct(Order $o)
    {
        parent::__construct();
        $this->order = $o;
    }

    public function addOrderLine($id, $quantity)
    {
        $ol = new OrderLine($this->order);
        $ol->setId($id);
        $ol->setQuantity($quantity);
        $this->append($ol);
    }
}
