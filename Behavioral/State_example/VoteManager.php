<?php
class VoteManager
{
	/**
	* 投票数量
	* @var int
	*/
	private $vote_count;
	/**
	* 状态类实例
	* @var object
	*/
	private $voteInstance;
	/**
	* 构造函数初始化成员属性
	*/
	public function __construct($count=1)
	{
		$this->vote_count = $count;
	}
	/**
	* 客户端调用接口函数
	*
	*/
	public function setState($count)
	{
		if(!is_null($count))
			$this->vote_count = $count;
		if($this->vote_count<5)
		{
			$this->voteInstance = new NormalVoteState();
		}
		else if($this->vote_count<8)
		{
			$this->voteInstance = new RepeatVoteState();
		}
		else 
		{
			$this->voteInstance = new BlockVoteState();
		}
		$this->voteInstance->vote();

	}
}