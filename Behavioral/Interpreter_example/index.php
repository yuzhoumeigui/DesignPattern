<?php
include "./Expression.php";
include "./ExpressionCharater.php";
include "./ExpressionNum.php";
include "./Interpreter.php";
$obj = new Interpreter();
$obj->execute('123456abc');