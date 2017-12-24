<?php
/**
* 接受者角色
*/
class Receiver
{
	/**
	* 接受者名称
	*/
	private $_name;

	public function __construct($name)
	{
		$this->_name = $name;
	}
	/**
	* 行动方法
	*/
	public function action()
	{
		echo $this->_name." do action <br />";
	}
}
