<?php
include "./keyValueStore.php";
include "./AbstractKeyValueStore.php";
include "./SlowStore.php";
include "./InMemoryKeyValueStore.php";
include "./FrontEnd.php";
$store = new SlowStore(
array(
	'pd'=>'Philip K.Dick',
	'ia'=>'Isaac Asimov',
	'ac'=>'Arthur C. Clarke',
	'hh'=>'Helmut Hei.enbttel'
	)
);
$cache = new InMemoryKeyValueStore($store);

$frontEnd = new FrontEnd($cache);

echo $frontEnd->get('ia')."<br />";

echo $frontEnd->getEscaped('hh')."<br />";