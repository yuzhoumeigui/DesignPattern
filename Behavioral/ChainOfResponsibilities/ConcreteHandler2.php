<?php
class ConcreteHandler2 extends Handler
{
	protected $_successor;
	public function setSuccessor(Handler $successor)
	{
		$this->_successor = $successor;
	}
	public function HandlerRequest($request)
	{
		if($request >=10 && $request <20)
			echo "2 handler request ".$request."<br />";
		else if($this->_successor!= null)
			$this->_successor->HandlerRequest($request);
	}
}