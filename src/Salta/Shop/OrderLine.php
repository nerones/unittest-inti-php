<?php

namespace Salta\Shop;

class OrderLine
{
    private $id;
    private $quantity;
    private $owner;

    public function __construct(Order $order)
    {
        $this->owner = $order;
    }

    public function getTotal()
    {
        $unitPrice = $this->owner->getDataAccess()->getProductPrice($this->id);
        $total = $unitPrice * $this->quantity;
        return $total;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


}