<?php
class ObjectStructure
{
	private $_collection;

	public function __construct()
	{
		$this->_collection = array();
	}
	public function attach(Element $element)
	{
		return array_push($this->_collection,$element);
	}
	public function detach(Element $element)
	{
		$index = array_search($element,$this->_collection);
		if($index!==FALSE)
			unset($this->_collection[$index]);
		return $index;
	}
	public function accept(Visitor $visitor)
	{
		foreach($this->_collection as $element)
			$element->accept($visitor);
	}
}