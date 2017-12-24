<?php
class RepeatVoteState implements VoteState
{
	public function vote()
	{
		echo "这是一个恶意投票<br />";
	}
}