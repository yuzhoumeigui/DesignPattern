<?php
class NormalVoteState implements VoteState
{
	public function vote()
	{
		echo "这是正常投票<br />";
	}
}