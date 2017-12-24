<?php
/**
* 具体装饰类
*/
class ConcreteDecoratorA extends Decorator
{
	public function __construct(Component $component)
	{
		parent::__construct($component);
	}
	public function operation()
	{
		//调用装饰类的操作
		parent::operation();
		//新增的操作
		$this->addedOperationA();
	}
	public function addedOperationA()
	{
		echo "Add operation A<br />";
	}
}