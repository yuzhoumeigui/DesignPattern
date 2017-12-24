<?php
/**
* 抽象享元角色
*
*/
abstract class Flyweight
{
	/**
	* 示意性方法
	* @param string $state 外部状态
	*/
	abstract public function operation($state);
}
