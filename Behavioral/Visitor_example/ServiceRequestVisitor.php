<?php
class ServiceRequestVisitor implements Visitor
{
	/**
	* 访问企业客户
	* @param $ec EnterpriseCustomer
	*/
	public function visitEnerpriseCustomer(EnterpriseCustomer $ec)
	{
		echo "企业:".$ec->name ."提出服务请求.<br />";
	}
	/**
	* 访问个人客户
	* @param $ec PersonalCustomer
	*/
	public function visitPersonalCustomer(PersonalCustomer $pc)
	{
		echo "客户:".$pc->name ."提出服务请求.<br />";
	}
}