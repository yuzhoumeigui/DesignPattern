<?php
/**
* 具体产品角色A
*/
class ConcreteProductA implements Product
{
	/**
	* 具体产品实现
	*/
	public function operation()
	{
		echo "ConcreteProductA <br />";
	}
}