<?php
class PersonalCustomer extends Customer
{
	/**
	* 接受访问者
	* @param $visitor ServiceRequestVisitor
	*/
	public function accept(ServiceRequestVisitor $visitor)
	{
		$visitor->VisitPersonalCustomer($this);
	}
}