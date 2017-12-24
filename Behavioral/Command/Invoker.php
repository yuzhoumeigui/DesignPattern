<?php
/**
* 请求者角色
*/
class Invoker
{
	private $_command;

	public function __construct(Command $command)
	{
		$this->_command = $command;
	}
	public function action()
	{
		$this->_command->execute();
	}
}