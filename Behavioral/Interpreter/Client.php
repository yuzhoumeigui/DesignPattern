<?php
class Client
{
	public static function main()
	{
		$context = new Context();

		$TerminalExpression = new TerminalExpression();

		$NonterminaExpression = new NonterminaExpression();

		$TerminalExpression->interpret($context);
		
		$NonterminaExpression->interpret($context);
	}

}