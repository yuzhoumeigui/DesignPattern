<?php
class Client
{
	public static function main()
	{
		$builder = new ConcreteBuilder();
		$director = new Director($builder);
		$product = $builder->getResult();
		$product->show();
	}
}