<?php
namespace System\Runtime;
class JitInfo extends \System\Object
{

	/**
	 * @param \System\Boolean|bool $currentThread
	 * @return \System\Int64|int
	 */
	public static function GetCompiledILBytes($currentThread){}
	/**
	 * @param \System\Boolean|bool $currentThread
	 * @return \System\Int64|int
	 */
	public static function GetCompiledMethodCount($currentThread){}
	private static function GetCompilationTimeInTicks($currentThread){}
	/**
	 * @param \System\Boolean|bool $currentThread
	 * @return \System\TimeSpan
	 */
	public static function GetCompilationTime($currentThread){}
}