<?php
class ExpressionNum extends Expression
{
	public function interpreter($str)
	{
		switch($str)
		{
			case "0":
				$num = "零";
			break;
			case "1":
				$num = "一";
			break;
			case "2":
				$num = "二";
			break;
			case "3":
				$num = "三";
			break;
			case "4":
				$num = "四";
			break;
			case "5":
				$num = "五";
			break;
			case "6":
				$num = "六";
			break;
			case "7":
				$num = "七";
			break;
			case "8":
				$num = "八";
			break;
			case "9":
				$num = "九";
			break;
			default:
				$num = "";
		}
		return $num;
	}
}