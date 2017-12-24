<?php
/**
* 具体工厂角色B
*/
class ConcreteCreatorB implements Creator
{
	/**
	* 工厂方法 返回具体产品B
	* @return ConcreteProductB
	*/
	public function factoryMethod()
	{
		return new ConcreteProductB();
	}
}