<?php
interface Visitor
{
	/**
	* 访问企业用户
	* @param $ec EnterpriseCustomer
	*/
	public function visitEnerpriseCustomer(EnterpriseCustomer $ec);

	/**
	* 访问个人用户
	* @param $pc PersonalCustomer
	*/
	public function visitPersonalCustomer(PersonalCustomer $pc);
}