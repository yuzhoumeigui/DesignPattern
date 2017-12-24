<?php
/**
* Class Proxy 代理对象
*
*/
class Proxy implements Subject
{
	//真正主题对象
	private $_realSubject = null;

	/**
	* proxy constructor 构造方法,依赖注入方式存储真实对象
	* @param RealSubject|null $realSubject
	*/	
	public function __construct(RealSubject $realSubject = null)
	{
		if(empty($realSubject))
		{
			$this->_realSubject = new RealSubject();
		}
		else
		{
			$this->_realSubject = $realSubject;
		}
	}
	/**
	* 调用说话方法
	* 
	*/
	public function say()
	{
		$this->_realSubject->say();
	}
	/**
	* 调用跑步方法
	*
	*/
	public function run()
	{
		$this->_realSubject->run();		
	}
}