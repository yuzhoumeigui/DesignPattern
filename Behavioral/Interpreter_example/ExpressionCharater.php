<?php
class ExpressionCharactor extends Expression
{
	public function interpreter($str)
	{
		return strtoupper($str);
	}
}