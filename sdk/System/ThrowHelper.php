<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThrowHelperMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentNullException_1($name){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowArgumentNullException_2($name, $message){}
}
/**
 */
class ThrowHelper extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowKeyNullException(){}
	/**
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentNullException_1 ($name)
	 * @uses ThrowHelperMethodsOverride::ThrowArgumentNullException_2 ($name, $message)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowArgumentNullException(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowValueNullException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowOutOfMemoryException(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
