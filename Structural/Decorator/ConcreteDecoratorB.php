<?php
/**
* 具体装饰类
*/
class ConcreteDecoratorB extends Decorator
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
		$this->addedOperationB();
	}
	public function addedOperationB()
	{
		echo "Add operation B<br />";
	}
}