<?php
/**
* 具体产品B1
*/
class ProductB1 implements AbstractProductB
{
	private $_name;
	public function __construct()
	{
		$this->_name = 'Product B1';
	}
	public function getName()
	{
		return $this->_name;
	}
}