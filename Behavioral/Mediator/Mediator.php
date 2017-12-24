<?php
/**
* 中介者模式
*
*/
abstract class Mediator
{
	abstract public function Send($message,$colleague);
}
