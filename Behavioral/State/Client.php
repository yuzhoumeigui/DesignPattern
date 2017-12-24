<?php
class Client
{
	public static function main()
	{

		$context = new Context(ConcreteStateA::getInstance());
		$context->request();
		$context->request();
		$context->request();
		$context = new Context(ConcreteStateB::getInstance());
		$context->request();
	}
}