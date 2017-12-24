<?php
/**
* 类适配器角色
*/
class Adapter extends Adaptee Implements Target
{
	/**
	* 
	*/
	public function sampleMethod2()
	{
		echo "Adapter sampleMethod2<br />";
	}
}