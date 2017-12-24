<?php
include "./AbstractFactory.php";
include "./AbstractProductA.php";
include "./AbstractProductB.php";

include "./ConcreteFactory1.php";
include "./ConcreteFactory2.php";

include "./ProductA1.php";
include "./ProductA2.php";

include "./ProductB1.php";
include "./ProductB2.php";
include "./Client.php";
Client::main();