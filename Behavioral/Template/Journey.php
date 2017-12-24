<?php
abstract class Journey
{

	/**
	* 父类和子类的公共方法
	* final意味着不能重写该方法
	*/	
	final public function takeAtrip()
	{
		$this->buyAFlight();
		$this->takePlance();
		$this->enjoyVacation();
		$this->buyGift();
		$this->takePlance();
	}
	/**
	* 该方法必须子类实现,这是模板方法的核心特性
	*
	*/
	abstract protected function enjoyVacation();

	/**
	* 者个方法也是算法的一部分,但是是可选的,只有在需要的时候采取重写他
	*
	*/
	protected function buyGift()
	{

	}
	/**
	* 子类不能访问该方法
	*/
	private function buyAFlight()
	{
		echo "Buying  a flight<br />";
	}
	/**
	* 这也是final方法
	*/
	final protected function  takePlance()
	{
		echo "Taking the plane<br />";
	}
	
}