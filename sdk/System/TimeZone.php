<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimeZoneMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsDaylightSavingTime_1($time){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDaylightSavingTime_2($time, $daylightTimes){}
}
/**
 */
class TimeZone extends \System\Object
{
	/**
	 * @var \System\TimeZone
	 * @property
	 */
	public readonly $CurrentTimeZone;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StandardName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DaylightName;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_InternalSyncObject(){}
	/**
	 * @return \System\TimeZone
	 */
	public static function get_CurrentTimeZone(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetTimeZone(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_StandardName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DaylightName(){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\TimeSpan
	 */
	public  function GetUtcOffset($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DateTime
	 */
	public  function ToUniversalTime($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DateTime
	 */
	public  function ToLocalTime($time){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Globalization\DaylightTime
	 */
	public  function GetDaylightChanges($year){}
	/**
	 * @uses TimeZoneMethodsOverride::IsDaylightSavingTime_1 ($time)
	 * @uses TimeZoneMethodsOverride::IsDaylightSavingTime_2 ($time, $daylightTimes)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDaylightSavingTime(mixed ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\DaylightTime $daylightTimes
	 * @return \System\TimeSpan
	 */
	protected static function CalculateUtcOffset($time, $daylightTimes){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
