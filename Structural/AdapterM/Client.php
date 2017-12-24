<?php
class Client
{
	public static function main()
	{
		$adaptee = new Adaptee();
		$adapter = new Adapter($adaptee);
		$adapter->sampleMethod1();
		$adapter->sampleMethod2();
	}
}