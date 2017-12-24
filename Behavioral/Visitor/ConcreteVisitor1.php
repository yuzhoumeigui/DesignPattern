<?php
class ConcreteVisitor1 implements Visitor
{
	public function visitorConcreteElementA(ConcreteElementA $elementA)
	{
		echo $elementA->getName()." visitd by ConcreteVisitor1 <br >";
	}
	public function visitorConcreteElementB(ConcreteElementB $elementB)
	{
		echo $elementB->getName()." visitd by ConcreteVisitor1 <br >";
	}

}