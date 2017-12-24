<?php
class Singleton
{
	/*静态成员变量,保存全局实力*/

	private static $_instance = null;

	/*私有化默认构造函数,保证外界无法实例化*/
	private function __construct(){}
	/*防止用户克隆*/
	private function __clone(){}
	/*防止反序列化*/
	private function __wakeup(){}
	public static function getInstance()
	{
		if(self::$_instance instanceof self)
		{
			echo "init.<br>";
			self::$_instance = new self;
		}
		return self::$_instance;
	}
	public function action()
	{
		echo "Hello World!<br />";
	}
}