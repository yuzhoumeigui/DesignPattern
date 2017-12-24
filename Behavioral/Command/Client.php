<?php
class Client
{
	public static function main()
	{
		$receiver = new Receiver('text');

		$command = new ConcreteCommand($receiver);

		$invoker = new Invoker($command);

		$invoker->action();
	}
}