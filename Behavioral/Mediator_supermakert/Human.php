<?php
abstract class Human
{
	protected $meiator = null;
	abstract public function getThings($number);
	abstract public function buy($name,$number);
	public function setMediator($mediator)
	{
		$this->mediator = $mediator;
	}
	public function getMediator()
	{
		return $this->mediator;
	}
}