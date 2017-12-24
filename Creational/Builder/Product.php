<?php
/**
* 产品
*/
class Product
{
	/*产品的组成部分*/
	private $_parts;
	public function __construct()
	{
		$this->_parts = array();
	}
	public function add($part)
	{
		return array_push($this->_parts,$part);
	}
	public function show()
	{
		echo "the product include: ";
		foreach($this->_parts as $val)
		{
			echo $val." ";
		}
	}
}