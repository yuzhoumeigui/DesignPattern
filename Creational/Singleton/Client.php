<?php
class Client 
{
	public static function main()
	{
		$instance = Singleton::getInstance();
		$instance->action();
	}
}