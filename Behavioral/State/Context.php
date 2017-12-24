<?php
/**
* 环境角色
*/
class Context
{
	private $_state;

	public function __construct(State $state)
	{
		$this->_state = $state;
	}
	public function setState(State $state)
	{
		$this->_state = $state;
	}
	public function request()
	{
		$this->_state->handle($this);
	}
}