<?php
/**
* 抽象模板角色
*/
abstract class AbstractClass 
{
	/**
	* 模板方法
	*/
	public function templateMethod()
	{
		echo "templateMethod begin<br />";
		$this->primitiveOperation1();
		$this->primitiveOperation2();
		echo "templateMethod end<br />";
	}

	/**
	* 基本方法1
	*/
	abstract protected function primitiveOperation1();
	/**
	* 基本方法1
	*/
	abstract protected function primitiveOperation2();
}