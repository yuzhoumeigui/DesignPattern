<?php
/**
* 具体策略角色A
*/
class ConcreteStrategyA implements Strategy
{
	public function algorithmInterface()
	{
		echo "algorithInterface A<br />";
	}
}