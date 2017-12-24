<?php
/*具体建造者*/
class ConcreteBuilder extends Builder
{
	private $_product;

	public function __construct()
	{
		$this->_product = new Product();
	}
	public function buildPart1()
	{
		$this->_product->add('part1');
	}
	public function buildPart2()
	{
		$this->_product->add('part2');
	}
	public function getResult()
	{
		return $this->_product;
	}
}