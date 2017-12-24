<?php
class Client
{
	public static function main()
	{
		$factory1 = new ConcreteFactory1();
		$productA1 = $factory1->createProductA();
		echo $productA1->getName()."<br />";
		$productA2 = $factory1->createProductB();
		echo $productA2->getName()."<br />";
		$factory2 = new ConcreteFactory2();
		$productB = $factory2->createProductA();
		echo $productB->getName()."<br />";
		$factory2 = new ConcreteFactory2();
		$productB = $factory2->createProductB();
		echo $productB->getName()."<br />";
	}
}