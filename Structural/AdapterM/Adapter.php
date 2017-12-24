<?php
/**
* 类适配器角色
*/
class Adapter extends Adaptee Implements Target
{
	/**
	* 
	*/
	private $_adaptee;
	public function __construct(Adaptee $adaptee)
	{
		$this->_adaptee = $adaptee;
	}
	/**
	* 委派调用Adaptee的samplemEthod1方法
	*
	*/
	public function sampleMethod1()
	{
		$this->_adaptee->sampleMethod1();
	}
	public function sampleMethod2()
	{
		echo "Adapter sampleMethod2<br />";
	}
}