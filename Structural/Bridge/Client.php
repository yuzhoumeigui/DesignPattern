<?php
class Client 
{
	public static function main()
	{

		$abstraction = new RefinedAbstraction(new ConcreteImplementorA());
		$abstraction->operation();
		$abstraction = new RefinedAbstraction(new ConcreteImplementorB());
		$abstraction->operation();
	}
}