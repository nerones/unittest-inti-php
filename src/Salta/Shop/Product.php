<?php

namespace Salta\Shop;

class Product
{
    private $id;
    private $unitPrice;

    public function __construct($id, $unitPrice)
    {
        $this->id = $id;
        $this->unitPrice = $unitPrice;
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
     * @param mixed $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }


}