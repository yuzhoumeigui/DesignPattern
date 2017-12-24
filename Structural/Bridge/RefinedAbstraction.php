<?php
/**
* 修正抽象化角色
*
*/
class RefinedAbstraction extends Abstraction
{
	public function __construct(Implementor $imp)
	{
		$this->imp = $imp;
	}
	/**
	* 操作方法再修正抽象化角色中实现
	*
	*/
	public function operation()
	{
		echo "RefinedAbstraction operation ";
		$this->imp->operationImp();
	}
}