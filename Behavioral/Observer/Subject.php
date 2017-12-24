<?php
interface Subject
{
	/**
	* 增加一个观察者对象
	* @param Observer $observer
	*/
	public function attach(Observer $observer);
	/**
	* 删除一个已注册的观察者对象
	* @param Observer $observer
	*/
	public function detach(Observer $observer);
	/**
	* 通知所有注册过的对象
	*
	*/
	public function notifyObservers();
}