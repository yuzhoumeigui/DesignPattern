<?php
abstract class AbstractExpression
{
	abstract function Interpret(Context $context);
}