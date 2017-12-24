<?php
class Receiver
{
	private $_name;
	public function __construct($name)
	{
		$this->_name = $name;
	}
	public function action()
	{
		echo $this->_name." do action<br />";
	}
	public function actionA()
	{
		echo $this->_name." do actionA<br />";
	}
	public function actionB()
	{	
		echo $this->_name." do actionB<br />";
	}
}