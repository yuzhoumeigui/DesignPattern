<?php
class Facade
{
	private $subSystemOne = null;
	private $subSystemTwo = null;
	private $subSystemThree = null;
	public function __construct()
	{
		$this->subSystemOne = new subSystemOne();
		$this->subSystemTwo = new subSystemTwo();
		$this->subSystemThree = new subSystemThree();
	}
	public function mothedA()
	{
		$this->subSystemOne->methodOne();
	}
	public function mothedB()
	{
		$this->subSystemTwo->methodTwo();	
	}
	public function mothedC()
	{
		$this->subSystemThree->methodThree();		
	}
	public function mothedD()
	{
		$this->subSystemOne->methodOne();
		$this->subSystemTwo->methodTwo();
		$this->subSystemThree->methodThree();
	}
}