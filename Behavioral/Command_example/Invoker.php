<?php
class Invoker
{
	private $_command = array();
	public function __construct()
	{

	}
	public function setCommand($command)
	{
		$this->_command[] = $command;
	}
	public function executeCommand()
	{
		foreach($this->_command as $command)
			$command->execute();
	}
	public function removeCommand($command)
	{
		$key = array_search($command,$this->_command);
		if($key!==false)
			unset($this->_command[$key]);
	}
	public function action()
	{
		$this->_command->execute();
	}

}