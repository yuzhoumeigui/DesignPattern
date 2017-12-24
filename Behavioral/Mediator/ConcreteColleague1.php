<?php
class ConcreteColleague1 extends Colleauge
{
	public function Send($message)
	{
		$this->mediator->Send($message,$this);
	}
	public function Notify($message)
	{
		echo ('1收到消息:'.$message."<br />");
	}
}