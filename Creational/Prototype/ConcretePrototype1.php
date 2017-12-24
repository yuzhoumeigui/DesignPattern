<?php
/**
* 具体原型角色
*/
class ConcretePrototype1 implements Prototype
{
	private $_name;
	public function __construct($name)
	{
		$this->_name = $name;
	}
	public function setName($name)
	{	
		$this->_name = $name;
	}
	public function getName()
	{
		return $this->_name;
	}
	public function copy()
	{
		return clone $this;
	}
}