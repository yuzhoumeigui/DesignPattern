<?php
/**
* 具体工厂2
*/
class ConcreteFactory2 implements AbstractFactory
{
	public function createProductA()
	{
		return new ProductA2();		
	}
	public function createProductB()
	{
		return new ProductB2();		
	}
}