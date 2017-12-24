<?php
class Interpreter
{
	private $expression  = null;

	public function execute($string)
	{
		$len  = strlen($string);
		for($i=0;$i<$len;$i++)
		{
			$temp = $string[$i];

			$this->expression = is_numeric($temp)?new ExpressionNum():new ExpressionCharactor();

			echo $this->expression->interpreter($temp);
		}
	}
}