<?php
class Memento
{
	private $_state;
	public function __construct($state)
	{
		$this->setState($state);
	}
	/**
	* 获取角色状态
	*/
	public function getState()
	{
		return $this->_state;
	}
	/**
	* 设置角色状态
	*/
	public function setState($state)
	{
		$this->_state = $state;
	}
}