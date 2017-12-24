<?php
class ConcreteVisitor2 implements Visitor
{
	public function visitorConcreteElementA(ConcreteElementA $elementA)
	{
		echo $elementA->getName()." visitd by ConcreteVisitor2 <br >";
	}
	public function visitorConcreteElementB(ConcreteElementB $elementB)
	{
		echo $elementB->getName()." visitd by ConcreteVisitor2 <br >";
	}

}