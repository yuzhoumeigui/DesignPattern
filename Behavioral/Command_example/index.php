<?php
include "./Command.php";
include "./ConcreteCommand.php";
include "./ConcreteCommandA.php";
include "./ConcreteCommandB.php";
include "./Receiver.php";
include "./Invoker.php";

$receiver = new Receiver('TEXT');
$receiver1 = new Receiver('XML');
$receiver2 = new Receiver('JSON');
$receiver3 = new Receiver('JSONP');
$receiver4 = new Receiver('STREAM');
$command = new ConcreteCommand($receiver);
$command1 = new ConcreteCommand($receiver1);
$command2 = new ConcreteCommand($receiver2);
$command3 = new ConcreteCommand($receiver3);
$command4 = new ConcreteCommand($receiver4);

$invoker = new Invoker();
$invoker->setCommand($command);
$invoker->setCommand($command1);
$invoker->executeCommand();

$invoker->removeCommand($command1);
$invoker->executeCommand();

$invoker->setCommand($command2);
$invoker->setCommand($command3);
$invoker->setCommand($command4);
$invoker->executeCommand();
