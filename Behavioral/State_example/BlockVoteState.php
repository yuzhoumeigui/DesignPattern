<?php
class BlockVoteState implements VoteState
{
	public function vote()
	{
		echo "这是一个黑名单投票<br />";
	}
}