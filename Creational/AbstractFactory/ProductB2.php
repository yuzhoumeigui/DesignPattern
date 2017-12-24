<?php
/**
* 具体产品B2
*/
class ProductB2 implements AbstractProductB
{
	private $_name;
	public function __construct()
	{
		$this->_name = 'Product B2';
	}
	public function getName()
	{
		return $this->_name;
	}
}