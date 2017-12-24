<?php
abstract class Customer
{
	/**
	* 客户id
	*@var int
	*/
	protected $customerId;
	/**
	* 客户姓名
	* @var string
	*/
	protected $customerName;
	
	/**
	* 接受访问者的访问
	* @param $visitor ServiceRequestVisitor
	*/
	public abstract function accept(ServiceRequestVisitor $visitor);
}