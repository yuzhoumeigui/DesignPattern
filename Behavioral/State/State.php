<?php
/**
* 抽象状态角色
*/
interface State
{
	/**
	* 
	*/
	public function handle(Context $context);
}