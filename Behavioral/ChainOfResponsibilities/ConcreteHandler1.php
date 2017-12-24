<?php
class ConcreteHandler1 extends Handler
{
	protected $_successor;
	public function setSuccessor(Handler $successor)
	{
		$this->_successor = $successor;
	}
	public function HandlerRequest($request)
	{
		if($request >=0 && $request <10)
			echo "1 handle request ".$request."<br />";
		else if($this->_successor!= null)
			$this->_successor->HandlerRequest($request);
	}
}