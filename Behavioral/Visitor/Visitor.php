<?php
/** 
* 访问者模式
* 访问者模式表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素类的前提下定义作用于这些元素的新操作。
*/
interface Visitor
{
	public function visitorConcreteElementA(ConcreteElementA $elementA);
	public function visitorConcreteElementB(ConcreteElementB $elementB);
}







