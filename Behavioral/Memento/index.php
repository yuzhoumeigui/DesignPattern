<?php
include "./Originator.php";
include "./Memento.php";
include "./Caretaker.php";

//创建目标对象
$org = new Originator();

$org->setState('open');

$org->showState();

//创建备忘录
$memento = $org->createMemento();
//通过Caretaker保存此备忘
$caretaker = new Caretaker();
$caretaker->setMemento($memento);

//改变目标对象状态
$org->setState('close');
$org->showState();
//还原操作
$org->restoreMemento($caretaker->getMemento());
$org->showState();