<?php
class ConcreteMediator implements Mediator
{
	private $orchardist = null;//果农
	private $boss = null;//化肥老板
	public function sell($name,$number)
	{

		if($name=='fruit')
		{
			$fruit = $this->orchardist->getThings($number);
			echo "商场从果农那里给你".$fruit."!<br />";
			return $fruit;
		}
		if($name=='fertilizer')
		{
			$fertilizer = $this->boss->getThings($number);
			echo "商场从化肥老板那里给你".$fertilizer."!<br />";
			return $fertilizer;
		}
	}
	public function setOrchardist(Orchardist $orchardist)
	{
		$this->orchardist = $orchardist;
	}
	public function setBoss(Boss $boss)
	{
		$this->boss = $boss;
	}
	public function __call($function_name,$arg)
	{
	}

}