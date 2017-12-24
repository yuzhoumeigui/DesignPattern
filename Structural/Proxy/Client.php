<?php
class Client
{
	public static function test()
	{
		//创建
		$subject = new RealSubject('张三');

		//代理
		$proxy = new Proxy($subject);

		//说话
		$proxy->say();
		//跑步
		$proxy->run();
	} 
}