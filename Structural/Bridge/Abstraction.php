<?php
/**
* 抽象化角色
* 
*/
abstract class Abstraction
{
	/*对现实化对象的引用*/
	protected $imp;
	/**
	* 操作
	*/
	public function operation()
	{
		$this->imp->operationImp();
	}
}