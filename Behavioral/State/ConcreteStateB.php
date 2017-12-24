<?php
/**
* 具体状态角色
*/
class ConcreteStateB implements State
{
	private static $_instance = NULL;

	private function __construct()
	{

	}

	/**
	* 静态工厂方法,返回此类的唯一实例
	*/
	public static function getInstance()
	{
		if(is_null(self::$_instance))
		{
			self::$_instance = new ConcreteStateB();	
		}
		return self::$_instance;
	} 
	public function handle(Context $context)
	{
		echo "ConcreteStateB handle method <br />";
		$context->setState(ConcreteStateB::getInstance());
	}
}