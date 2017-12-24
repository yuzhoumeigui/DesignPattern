<?php
/**
* 装饰角色
*/
abstract class Decorator implements Component
{
	protected $_component;
	public function __construct(Component $component)
	{
		$this->_component = $component;
	}
	public function operation()
	{
		$this->_component->operation();
	}
}