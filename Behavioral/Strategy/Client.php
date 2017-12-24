<?php
class Client
{
	public static function main()
	{
		$strategyA = new ConcreteStrategyA();

		$context = new Context($strategyA);

		$context->contextInterface();
	}
}