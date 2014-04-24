<?php

namespace Salta\Shop;

use Exception;
use InvalidArgumentException;

class Order
{
    private $id;
    private $dataAccess;
    private $orderLines;

    /**
     *
     * @param [type] $id         [description]
     * @param [type] $dataAccess [description]
     */
    //El valor por defecto de $dataAccess es nulo para poder aceptar null, si no una excepcion es lanzada
    public function __construct($id, IShopDataAccess $dataAccess = null)
    {
        if (is_null($dataAccess)) {
            throw new InvalidArgumentException('Argumento Ilegal');
        }
        $this->id = $id;
        $this->dataAccess = $dataAccess;
        $this->orderLines = new OrderLineCollection($this);

    }

    public function save()
    {
        $this->dataAccess->save($this->id, $this);
    }

    /**
     * @param \Salta\Shop\IShopDataAccess $dataAccess
     */
    public function setDataAccess($dataAccess)
    {
        $this->dataAccess = $dataAccess;
    }

    /**
     * @return \Salta\Shop\IShopDataAccess
     */
    public function getDataAccess()
    {
        return $this->dataAccess;
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
     * @param mixed $orderLines
     */
    public function setOrderLines($orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @return mixed
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }
}
