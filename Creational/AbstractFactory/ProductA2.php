<?php
/**
* 具体产品A2
*/
class ProductA2 implements AbstractProductA
{
	private $_name;
	public function __construct()
	{
		$this->_name = 'Product A2';
	}
	public function getName()
	{
		return $this->_name;
	}
}