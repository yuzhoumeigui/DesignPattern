<?php
class ConcreteColleague2 extends Colleauge
{
	public function Send($message)
	{
		$this->mediator->Send($message,$this);
	}
	public function Notify($message)
	{
		echo ('2收到消息:'.$message."<br />");
	}
}