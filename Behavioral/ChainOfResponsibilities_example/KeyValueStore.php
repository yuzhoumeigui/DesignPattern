<?php
/**
* 处理抽象类,对象如果想成为责任链的一部分必须直接实现者个接口活集成一个抽象的处理类
*
*/
interface KeyValueStore
{
	/*
	* @param string $key
	* @return mixed
	*/
	public function get($key);
}