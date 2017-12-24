<?php
/**
* 抽象建造者
*/
abstract class Builder
{
	/*产品零件构造方法1*/
	public abstract function buildPart1();
	/*产品零件构造方法2*/
	public abstract function buildPart2();
	/*获取产品*/
	public abstract function getResult();
}