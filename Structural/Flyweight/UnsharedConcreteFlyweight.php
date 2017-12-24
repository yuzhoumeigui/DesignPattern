<?php
/**
* 不共享的具体享元,客户端直接调用
*
*/
class UnsharedConcreteFlyweight extends Flyweight
{
	private $_intrinsicState = null;
	/**
	* 构造方法
	* @param string $state 内部状态
	*/
	public function __construct($state)
	{
		$this->_intrinsicState = $state;
	}
	public function operation($state)
	{
		echo 'UnSharedConcreteFlyweight operation Intrinsic State  = '.$this->_intrinsicState.' Extrinsic State='.$state."<br />";
	}
}