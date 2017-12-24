<?php
//ConcreteMediator:具体中介者
class ConcreteMediator extends Mediator
{
	public function __set($name,$value)
	{
		$this->$name = $value;
	}
	public function Send($message,$colleague)
	{
		if($colleague==$this->colleague1)
		{
			$this->colleague2->Notify($message);
		}
		else
		{
			$this->colleague1->Notify($message);
		}
	}
}