<?php
class Context
{
	/* 引用的策略 */
	private $_strategy;

	public function __construct(Strategy $strategy)
	{
		$this->_strategy = $strategy;
	}
	public function contextInterface()
	{
		$this->_strategy->algorithmInterface();
	}
}