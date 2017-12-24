<?php
class Client
{
	public static function main()
	{
		$h1 = new ConcreteHandler1();
		
		$h2 = new ConcreteHandler2();
		
		$h3 = new ConcreteHandler3();

		$h1->setSuccessor($h2);

		$h2->setSuccessor($h3);

		$request = array(12,100,20,21,50);
		foreach($request as $key =>$request)
		{
			$h1->HandlerRequest($request);
		}
	}
}