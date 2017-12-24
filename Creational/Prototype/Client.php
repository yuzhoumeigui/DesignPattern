<?php
class Client
{
	public static function main()
	{
		$demo = new Demo();

		$demo->array = array('a','b');

		$object1 = new ConcretePrototype1($demo);

		$object2 = $object1->copy();

		var_dump($object1->getName());

		var_dump($object2->getName());

		$demo->array = array(3,'f');

		var_dump($object1->getName());

		var_dump($object2->getName());

		$demo->array = array('c','d');

		$object1 = new ConcretePrototype2($demo);

		$object2 = $object1->copy();

		var_dump($object1->getName());

		var_dump($object2->getName());

		$demo->array = array(3,'h');

		var_dump($object1->getName());

		var_dump($object2->getName());

	}
}