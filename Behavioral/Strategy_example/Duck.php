<?php
class Duck
{
	private $_fly;
	public function performFly()
	{
		$this->_fly->fly();		
	}
	public function setFly(Fly $behavior)
	{
		$this->_fly = $behavior;
	}
}