<?php
namespace System\Runtime\Remoting;
class ObjectHandle extends \System\MarshalByRefObject
{

	/**
	 * @return \System\Object|object
	 */
	public function Unwrap(){}
	/**
	 * @param \System\Object|object $o
	 */
	public function __construct($o){}
}