<?php
class ConcreteAggregate implements IteratorAggregate
{
	public $property;

	/**
	* 添加属性
	* @param $property
	*/
	public function addProperty($property)
	{
		$this->property[] = $property;
	}
	public function getIterator()
	{
		return new ConcreteIterator($this->property);
	}
}