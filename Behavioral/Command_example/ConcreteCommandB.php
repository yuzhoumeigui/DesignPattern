<?php
class ConcreteCommandB implements Command
{
	private $_receiver;
	public function __construct($receiver)
	{
		$this->_receiver = $receiver;
	}
	public function execute()
	{
		$this->_receiver->actionB();
	}
}