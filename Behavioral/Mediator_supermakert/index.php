<?php
include "./Mediator.php";
include "./ConcreteMediator.php";
include "./Human.php";
include "./Orchardist.php";
include "./Boss.php";

$mediator = new ConcreteMediator();

$orchardist = new Orchardist($mediator);
$mediator->setOrchardist($orchardist);

$boss  = new Boss($mediator);
$mediator->setBoss($boss);
//果农买200袋化肥
$orchardist->buy('fertilizer',200); 
//化肥老板买了50个水果
$boss->buy('fruit',50);