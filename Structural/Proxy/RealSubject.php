<?php

/**
* Class RealSubject 真正主题角色
*
*/
class RealSubject implements Subject
{
	/**
	* 姓名
	*/
	private $_name;
	/**
	* RealSubject constructor,构造方法
	* @param $name
	*/
	public function __construct($name)
	{
		$this->_name = $name;
	}
	/**
	* 说话
	*
	*/
	public function say()
	{
		echo $this->_name."在说话<br />";
	}
	/**
	* 在跑步
	*
	*/
	public function run()
	{
		echo $this->_name."在跑步<br />";
	}
}