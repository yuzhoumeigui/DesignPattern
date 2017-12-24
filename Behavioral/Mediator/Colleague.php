<?php
//Colleague:抽象同事类
abstract class Colleauge
{
	public function __construct($mediator)
	{
		$this->mediator = $mediator;
	}
}