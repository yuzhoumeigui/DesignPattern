<?php
class Client
{
	public static function main()
	{
		$elementA = new ConcreteElementA("ElementA");
		$elementB = new ConcreteElementA("ElementB");
		$elementA2 = new ConcreteElementA("ElementA2");
		$visitor1 = new ConcreteVisitor1();
		$visitor2 = new ConcreteVisitor2();

		$os = new ObjectStructure();
		$os->attach($elementA);
		$os->attach($elementB);
		$os->attach($elementA2);
		$os->detach($elementA);
		$os->accept($visitor1);
		$os->accept($visitor2);
	}
}