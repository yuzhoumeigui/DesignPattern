<?php
class Orchardist extends Human
{
	private $mediator;
	public function __construct(ConcreteMediator $mediator)
	{
		$this->mediator = $mediator;
	}
	public function getThings($number)
	{
		return $number."个水果";
	}
	public function buy($name,$number)
	{
		$result = $this->mediator->sell($name,$number);

		echo "我们果农得到了".$result."!<br />";
	}
}