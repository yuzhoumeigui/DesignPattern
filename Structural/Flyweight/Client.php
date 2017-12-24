<?php
/**
* 客户端
*
*/
class Client
{
	public static function main()
	{
		$flyweightFactory = new FlyWeightFactory();
		$flyweight = $flyweightFactory->getFlyweight('stateA');
		$flyweight->operation('other state A');
		$flyweight = $flyweightFactory->getFlyweight('stateB');
		$flyweight->operation('other state B');
		/**
		* 不共享对象单独调用
		*
		*/
		$uflyweight = new UnsharedConcreteFlyweight('stateA');
		$uflyweight->operation('other state A');
	}
}