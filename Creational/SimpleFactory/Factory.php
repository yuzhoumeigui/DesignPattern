<?php
/**
* 简单工厂
*/
class Factory
{
	public static function getProduct($type)
	{
		$product=null;
		if($type=="ProductA")
		{
			$product = new ProductA();
		}
		else if($type=="ProductB")
		{
			$product = new ProductB();
		}
		return $product;
	} 
}