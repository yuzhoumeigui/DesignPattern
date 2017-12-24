<?php
class Item extends MenuComponent
{
	private $_name = null;
	private $_url = null;
	public function __construct($name,$url)
	{
		$this->_name = $name;
		$this->_url = $url;
	}
	public function display()
	{
		echo "--<a href=".$this->_url.">".$this->_name."</a><br />";
	}
}