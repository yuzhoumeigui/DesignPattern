<?php
class Client
{
	public static function main()
	{
		$m = new ConcreteMediator();

		$c1 = new ConcreteColleague1($m);
		$c2 = new ConcreteColleague2($m);

		$m->colleague1 = $c1;
		$m->colleague2 = $c2;

		$c1->Send('C1的消息');
		//sleep(2);
		$c2->Send('C2的消息');
	}
}