<?php
class ObjectStructure
{
	/**
	* 存储客户对象
	* @var array
	*/
	private $obj = array();
	/**
	* 相对相结构种添加元素
	* @param $ele Customer
	*/
	public function addElement($ele)
	{
		array_push($this->obj,$ele);
	}
	/**
	* 处理请求
	* @param $visitor Visitor
	*/
	public function handleRequest(Visitor $visitor)
	{
		//遍历对象结构中的元素,接受访问
		foreach($this->obj as $ele)
		{
			$ele->accept($visitor);
		}
	}
}