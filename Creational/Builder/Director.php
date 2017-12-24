<?php
/**
* 导演者
*/
class Director
{
	public function __construct(Builder $builder)
	{
		$builder->buildPart1();
		$builder->buildPart2();
	}
}