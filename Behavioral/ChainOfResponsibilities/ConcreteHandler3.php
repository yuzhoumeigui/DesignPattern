<?php
class ConcreteHandler3 extends Handler
{
	protected $_successor;

	public function setSuccessor(Handler $successor)
	{
		$this->_successor = $successor;
	}
	public function HandlerRequest($request)
	{
		if($request >=20 && $request <30)
			echo "3 handler request ".$request."<br />";
		else if($this->_successor!= null)
			$this->_successor->HandlerRequest($request);
	}
}