<?php

include "Fly.php";
include "Wings.php";
include "NoWings.php";
include "Duck.php";
include "RubberDuck.php";
$duck = new RubberDuck();

$duck->setFly(new Wings());
$duck->performFly();
$duck->setFly(new NoWings());
$duck->performFly();