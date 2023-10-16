<?php
namespace System;
/**
 */
class ValueType extends \System\Object
{
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanCompareBits($obj){}
}
