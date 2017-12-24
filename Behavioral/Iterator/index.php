<?php
include "./ConcreteIterator.php";
include "./ConcreteAggregate.php";
//创建一个容器
$concreteAggregate = new ConcreteAggregate();
//添加属性
$concreteAggregate->addProperty('属性1');
//添加属性
$concreteAggregate->addProperty('属性2');
//给容器创建迭代器
$iterator = $concreteAggregate->getIterator();

//遍历
while($iterator->valid())
{
	$key = $iterator->key();
	$value = $iterator->current();
	echo "键:".$key." 值:".$value."<br />";
	$iterator->next();
}