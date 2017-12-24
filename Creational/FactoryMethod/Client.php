<?php
class Client
{
	public static function main()
	{
		$creatorA = new ConcreteCreatorA();
		$creatorA = $creatorA->factoryMethod();
		$creatorA->operation();		
		$creatorB = new ConcreteCreatorB();
		$creatorB = $creatorB->factoryMethod();
		$creatorB->operation();
	}
}