<?php
include "./Person.php";
include "./Null.php";
function getPerson($name)
{
	if($name=="PHPer")
		return new Person;
	else
		return new NullObject;
}
$phper = getPerson('Pher');
$phper->code();