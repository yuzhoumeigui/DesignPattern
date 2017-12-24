<?php
class Client
{
	private $_menu = null;
	public function __construct($menu)
	{
		$this->_menu = $menu;
	}
	public function setMenu($menu)
	{
		$this->_menu = $menu;
	}
	public function displayMenu()
	{
		$this->_menu->display();
	}
}