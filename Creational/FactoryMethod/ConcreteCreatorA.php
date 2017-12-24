<?php
/**
* 具体工厂角色A
*/
class ConcreteCreatorA implements Creator
{
	/**
	* 工厂方法 返回具体产品A
	* @return ConcreteProductA
	*/
	public function factoryMethod()
	{
		return new ConcreteProductA();
	}
}