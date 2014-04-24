<?php

namespace Salta\Shop;

use Exception;

class Order
{
	private $id;
	private $dataAccess;
	private $orderLines;

	public function  __construct($id, IShopDataAccess $dataAccess)
	{
		if (is_null($dataAccess)) {
			throw new Exception('Argumento Ilegal');
		}
		$this->id = $id;
		$this->dataAccess = $dataAccess;
		$this->orderLines = new OrderLineCollection($this);

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
	
