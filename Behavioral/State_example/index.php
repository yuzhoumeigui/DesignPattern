<?php
include "./VoteState.php";
include "./NormalVoteState.php";
include "./RepeatVoteState.php";
include "./BlockVoteState.php";
include "./VoteManager.php";

$obj = new VoteManager();
$obj->setState(1);
$obj->setState(6);
$obj->setState(10);