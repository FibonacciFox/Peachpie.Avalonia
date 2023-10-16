<?php
namespace System\Runtime;
/**
 */
class JitInfo extends \System\Object
{
	/**
	 * @param \System\Boolean $currentThread
	 * @return \System\Int64|int
	 */
	public static function GetCompiledILBytes($currentThread){}
	/**
	 * @param \System\Boolean $currentThread
	 * @return \System\Int64|int
	 */
	public static function GetCompiledMethodCount($currentThread){}
	/**
	 * @param \System\Boolean $currentThread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCompilationTimeInTicks($currentThread){}
	/**
	 * @param \System\Boolean $currentThread
	 * @return \System\TimeSpan
	 */
	public static function GetCompilationTime($currentThread){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
