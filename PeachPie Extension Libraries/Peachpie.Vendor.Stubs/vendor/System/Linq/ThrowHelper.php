<?php
namespace System\Linq;
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
	private static function GetArgumentString($argument){}
}