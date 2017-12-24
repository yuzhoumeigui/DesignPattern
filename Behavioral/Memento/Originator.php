<?php
/**
* 发起人(Originator)角色
*/
class Originator
{
	private $_state;
	public function __construct()
	{
		$this->_state = '';
	}
	/**
	* 创建备忘录
	* @return Memnto 包含当前状态的备忘录
	*/
	public function createMemento()
	{
		return new Memento($this->_state);
	}
	/**
	* 将发起人恢复到备忘录对象记录的状态上
	* @param Memento $memento
	*/
	public function restoreMemento(Memento $memento)
	{
		$this->_state = $memento->getState();
	}
	public function setState($state)
	{
		$this->_state = $state;
	}
	public function getState()
	{
		return $this->_state;
	}
	/**
	* 测试用方法显示状态
	*/
	public function showState()
	{
		echo "Original Status:".$this->getState()."<br />";
	}
}