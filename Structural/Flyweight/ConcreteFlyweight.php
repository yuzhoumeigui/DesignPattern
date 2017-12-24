<?php
/**
* 具体享元角色
*
*/
class ConcreteFlyWeight extends Flyweight
{
	private $_intrinstcState = null;
	/**
	* 构造方法
	* @param string $state 内部状态
	*/
	public function __construct($state)
	{
		$this->_intrinstcState = $state;
	}
	public function operation($state)
	{
		echo 'ConcreteFlyweight operation Intrinsic State  = '.$this->_intrinstcState.' Extrinsic State='.$state."<br />";
	}
}