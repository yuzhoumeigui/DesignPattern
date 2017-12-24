<?php
class Client
{
	public function main()
	{
		$component = new ConcreteComponent();
		$decoratorA = new ConcreteDecoratorA($component);
		$decoratorB = new ConcreteDecoratorB($decoratorA);
		$decoratorA->operation();
		$decoratorB->operation();
	}

}