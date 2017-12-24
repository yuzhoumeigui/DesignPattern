<?php
class Client
{
	public static function main()
	{
		$product = Factory::getProduct('ProductA');
		$product->operation();
		$product = Factory::getProduct('ProductB');
		$product->operation();
	}
}