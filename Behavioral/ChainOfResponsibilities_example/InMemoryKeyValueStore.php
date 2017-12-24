<?php
class InMemoryKeyValueStore implements KeyValueStore
{
	protected $_nextHandler;
	protected $_cached = array();
	public function __construct(KeyValueStore $nextHandler)
	{

		$this->_nextHandler = $nextHandler;
	}
	protected function _load($key)
	{
		if(!isset($this->_cached[$key]))
		{
			$this->_cached[$key] = $this->_nextHandler->get($key);
		}
	}
	public function get($key)
	{
		$this->_load($key);
		return $this->_cached[$key];
	}
}