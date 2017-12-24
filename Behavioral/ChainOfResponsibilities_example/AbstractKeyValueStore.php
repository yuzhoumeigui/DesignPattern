<?php
/**
* 接收一个请求,设法满足它,如果不成功就委派给下一个处理程序
*
*/
abstract class AbstractKeyValueStore implements KeyValueStore
{
	protected $_nextHandler;
	public function get($key)
	{
		return $this->_nextHandler->get($key);
	}
}