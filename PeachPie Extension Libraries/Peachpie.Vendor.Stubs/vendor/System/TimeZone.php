<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeZoneOverride {
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsDaylightSavingTime_1 ($time){}
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @param \System\Globalization\DaylightTime $daylightTimes
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsDaylightSavingTime_2 ($time, $daylightTimes){}
}
class TimeZone extends \System\Object
{
	use TimeZoneOverride;
	/**
	 * @property
	 * @var \System\TimeZone
	 * @since readonly
	 */
	public $CurrentTimeZone;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StandardName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DaylightName;
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetTimeZone(){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\TimeSpan
	 */
	abstract public function GetUtcOffset($time);
	/**
	 * @param \System\DateTime $time
	 * @return \System\DateTime
	 */
	public function ToUniversalTime($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DateTime
	 */
	public function ToLocalTime($time){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Globalization\DaylightTime
	 */
	abstract public function GetDaylightChanges($year);
	/**
	 * @uses TimeZoneOverride::IsDaylightSavingTime_1 <br>public , args: ($time)<br>
	 * @uses TimeZoneOverride::IsDaylightSavingTime_2 <br>public , args: ($time, $daylightTimes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsDaylightSavingTime (\override ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\DaylightTime $daylightTimes
	 * @return \System\TimeSpan
	 */
	protected static function CalculateUtcOffset($time, $daylightTimes){}
}