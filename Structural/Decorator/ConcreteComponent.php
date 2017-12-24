<?php
/**
* 具体构建
*/
class ConcreteComponent implements Component
{
	public function operation()
	{
		echo "Concrete Component operation<br />";
	}
}