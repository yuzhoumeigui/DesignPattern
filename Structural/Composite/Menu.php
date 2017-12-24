<?php
class Menu extends MenuComponent
{
	private $_items = array();
	private $_name = null;
	public function __construct($name)
	{
		$this->_name = $name;
	}
	public function add($component)
	{
		$this->_items[] = $component;
	}
	public function remove($component)
	{
		$key = array_search($component,$this->_items);

		if($key!==false)
			unset($this->_items[$key]);
	}
	public function display()
	{
		echo "-".$this->_name."<br />";
		foreach($this->_items as $item)
			$item->display();
	}
}