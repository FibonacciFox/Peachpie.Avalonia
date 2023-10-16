<?php
namespace System\Diagnostics;
/**
 */
class Debugger extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $DefaultCategory;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAttached;
	/**
	 * @return \System\Void|void
	 */
	public static function Break(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BreakInternal(){}
	/**
	 * @return \System\Boolean
	 */
	public static function Launch(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NotifyOfCrossThreadDependencySlow(){}
	/**
	 * @return \System\Void|void
	 */
	public static function NotifyOfCrossThreadDependency(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LaunchInternal(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsAttached(){}
	/**
	 * @param \System\Int32|int $level
	 * @param \System\String|string $category
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	public static function Log($level, $category, $message){}
	/**
	 * @param \System\Int32|int $level
	 * @param \System\String|string $category
	 * @param \System\String|string $message
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LogInternal($level, $category, $message){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsLogging(){}
	/**
	 * @param \System\Diagnostics\ICustomDebuggerNotification $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CustomNotification($data){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
