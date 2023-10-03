<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StopwatchHelperMethodsOverride
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
class StopwatchHelper extends \System\Object
{
	/**
	 * @uses StopwatchHelperMethodsOverride::GetElapsedTime_1 ($startingTimestamp)
	 * @uses StopwatchHelperMethodsOverride::GetElapsedTime_2 ($startingTimestamp, $endingTimestamp)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetElapsedTime(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
