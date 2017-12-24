<?php
/**
* Interface Subject 抽象主题角色
*  定义RealSubject和Proxy共同具备的东西
*/
interface Subject
{
	public function say();
	public function run();
}
