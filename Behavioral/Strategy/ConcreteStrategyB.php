<?php
/**
* 具体策略角色B
*/
class ConcreteStrategyB implements Strategy
{
	public function algorithmInterface()
	{
		echo "algorithInterface B<br />";
	}
}