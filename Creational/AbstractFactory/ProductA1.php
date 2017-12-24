<?php
/**
* 具体产品A1
*/
class ProductA1 implements AbstractProductA
{
	private $_name;
	public function __construct()
	{
		$this->_name = 'Product A1';
	}
	public function getName()
	{
		return $this->_name;
	}
}