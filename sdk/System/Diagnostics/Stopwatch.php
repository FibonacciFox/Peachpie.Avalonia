<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StopwatchMethodsOverride
{
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function GetElapsedTime_1($startingTimestamp){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function GetElapsedTime_2($startingTimestamp, $endingTimestamp){}
}
/**
 */
class Stopwatch extends \System\Object
{
	/**
	 * @var \System\Int64
	 * @field
	 */
	public readonly $Frequency;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $IsHighResolution;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRunning;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $Elapsed;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $ElapsedMilliseconds;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $ElapsedTicks;
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
	/**
	 * @return \System\Diagnostics\Stopwatch
	 */
	public static function StartNew(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Stop(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Restart(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRunning(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Elapsed(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_ElapsedMilliseconds(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_ElapsedTicks(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function GetTimestamp(){}
	/**
	 * @uses StopwatchMethodsOverride::GetElapsedTime_1 ($startingTimestamp)
	 * @uses StopwatchMethodsOverride::GetElapsedTime_2 ($startingTimestamp, $endingTimestamp)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetElapsedTime(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetRawElapsedTicks(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetElapsedDateTimeTicks(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplay(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueryPerformanceFrequency(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueryPerformanceCounter(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
