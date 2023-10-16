<?php
namespace System\Linq;
/**
 */
class ThrowHelper extends \System\Object
{
	/**
	 * @param \System\Linq\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentNullException($argument){}
	/**
	 * @param \System\Linq\ExceptionArgument $argument
	 * @return \System\Void|void
	 */
	protected static function ThrowArgumentOutOfRangeException($argument){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowMoreThanOneElementException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowMoreThanOneMatchException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowNoElementsException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowNoMatchException(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowNotSupportedException(){}
	/**
	 * @param \System\Linq\ExceptionArgument $argument
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetArgumentString($argument){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
