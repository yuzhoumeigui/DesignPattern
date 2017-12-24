<?php
class ConcreteObserver implements Observer
{
	/**
	* 观察者名称
	*  @var string
	*/
	private $_name;

	public function __construct($name)
	{
		$this->_name = $name;
	}
	/**
	* 更新方法
	*
	*/
	public function update()
	{
		echo "Observer ".$this->_name." had notified.<br />";
	}
}