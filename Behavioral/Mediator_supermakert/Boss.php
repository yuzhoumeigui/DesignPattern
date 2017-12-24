<?php
class Boss extends Human
{
	private $mediator;
	public function __construct(ConcreteMediator $mediator)
	{
		$this->mediator = $mediator;
	}
	public function getThings($number)
	{
		return $number."袋化肥";
	}
	public function buy($name,$number)
	{
		$result = $this->mediator->sell($name,$number);
		echo "我们化肥老板得到了".$result."!<br />";
	}
}