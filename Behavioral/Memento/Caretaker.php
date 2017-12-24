<?php
class Caretaker
{
	private $_memento;

	/**
	* 获取角色
	*/
	public function getMemento()
	{
		return $this->_memento;
	}
	/**
	* 设置角色
	*/
	public function setMemento(Memento $memento)
	{
		$this->_memento = $memento;
	}
}