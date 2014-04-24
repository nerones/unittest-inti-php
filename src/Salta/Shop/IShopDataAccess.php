<?php

namespace Salta\Shop;

use Salta\Shop\Order;

interface IShopDataAccess
{
	public function getProductPrice($id);

	public function save($id, Order $order);
}

