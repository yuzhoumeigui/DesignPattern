<?php
include "./Journey.php";
include "./BeachJourney.php";
include "./CityJourney.php";

$beach = new BeachJourney();
$beach->takeATrip();

$city = new CityJourney();
$city->takeATrip();