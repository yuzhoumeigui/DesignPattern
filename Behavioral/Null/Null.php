<?php
class NullObject{
	public function __call($method,$arg)
	{
		echo "this Null Object";
	}
}