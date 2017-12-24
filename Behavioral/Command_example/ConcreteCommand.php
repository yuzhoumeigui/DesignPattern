<?php
class ConcreteCommand implements Command
{
	private $_receiver;
	public function __construct($receiver)
	{
		$this->_receiver = $receiver;
	}
	public function execute()
	{
		$this->_receiver->action();
	}
}