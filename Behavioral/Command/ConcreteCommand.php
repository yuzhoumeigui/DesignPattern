<?php
/**
* 具体命令角色
*/
class ConcreteCommand implements Command
{
	private $_receiver;

	public function __construct(Receiver $receiver)
	{
		$this->_receiver = $receiver;
	}

	/**
	* 执行方法
	*/
	public function execute()
	{
		$this->_receiver->action();
	}
}