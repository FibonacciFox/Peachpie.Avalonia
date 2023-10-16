<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CalendarMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_1($year, $month){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_2($year, $month, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInYear_1($year){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInYear_2($year, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetMonthsInYear_1($year){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetMonthsInYear_2($year, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapDay_1($year, $month, $day){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapDay_2($year, $month, $day, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapMonth_1($year, $month){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapMonth_2($year, $month, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetLeapMonth_1($year){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetLeapMonth_2($year, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_1($year){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_2($year, $era){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_1($year, $month, $day, $hour, $minute, $second, $millisecond){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_2($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
}
/**
 */
class Calendar extends \System\Object implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_twoDigitYearMax;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CurrentEra;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $MinSupportedDateTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $MaxSupportedDateTime;
	/**
	 * @var \System\Globalization\CalendarAlgorithmType
	 * @property
	 */
	public readonly $AlgorithmType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public readonly $Eras;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TwoDigitYearMax;
	/**
	 * @return \System\DateTime
	 */
	public  function get_MinSupportedDateTime(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_MaxSupportedDateTime(){}
	/**
	 * @return \System\Globalization\CalendarAlgorithmType
	 */
	public  function get_AlgorithmType(){}
	/**
	 * @return \System\Globalization\CalendarId
	 */
	protected  function get_ID(){}
	/**
	 * @return \System\Globalization\CalendarId
	 */
	protected  function get_BaseCalendarID(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Globalization\Calendar $calendar
	 * @return \System\Globalization\Calendar
	 */
	public static function ReadOnly($calendar){}
	/**
	 * @return \System\Void|void
	 */
	protected  function VerifyWritable(){}
	/**
	 * @param \System\Boolean $readOnly
	 * @return \System\Void|void
	 */
	protected  function SetReadOnlyState($readOnly){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_CurrentEraValue(){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\DateTime $minValue
	 * @param \System\DateTime $maxValue
	 * @return \System\Void|void
	 */
	protected static function CheckAddResult($ticks, $minValue, $maxValue){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $scale
	 * @return \System\DateTime
	 */
	protected  function Add($time, $value, $scale){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Double|double $milliseconds
	 * @return \System\DateTime
	 */
	public  function AddMilliseconds($time, $milliseconds){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $days
	 * @return \System\DateTime
	 */
	public  function AddDays($time, $days){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $hours
	 * @return \System\DateTime
	 */
	public  function AddHours($time, $hours){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $minutes
	 * @return \System\DateTime
	 */
	public  function AddMinutes($time, $minutes){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	public  function AddMonths($time, $months){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $seconds
	 * @return \System\DateTime
	 */
	public  function AddSeconds($time, $seconds){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $weeks
	 * @return \System\DateTime
	 */
	public  function AddWeeks($time, $weeks){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $years
	 * @return \System\DateTime
	 */
	public  function AddYears($time, $years){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetDayOfMonth($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DayOfWeek
	 */
	public  function GetDayOfWeek($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetDayOfYear($time){}
	/**
	 * @uses CalendarMethodsOverride::GetDaysInMonth_1 ($year, $month)
	 * @uses CalendarMethodsOverride::GetDaysInMonth_2 ($year, $month, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::GetDaysInYear_1 ($year)
	 * @uses CalendarMethodsOverride::GetDaysInYear_2 ($year, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetEra($time){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_Eras(){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetHour($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Double|double
	 */
	public  function GetMilliseconds($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetMinute($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetMonth($time){}
	/**
	 * @uses CalendarMethodsOverride::GetMonthsInYear_1 ($year)
	 * @uses CalendarMethodsOverride::GetMonthsInYear_2 ($year, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetSecond($time){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	protected  function GetFirstDayWeekOfYear($time, $firstDayOfWeek){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $firstDayOfWeek
	 * @param \System\Int32|int $fullDays
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetWeekOfYearFullDays($time, $firstDayOfWeek, $fullDays){}
	/**
	 * @param \System\Int32|int $firstDayOfWeek
	 * @param \System\Int32|int $minimumDaysInFirstWeek
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetWeekOfYearOfMinSupportedDateTime($firstDayOfWeek, $minimumDaysInFirstWeek){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_DaysInYearBeforeMinSupportedYear(){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\CalendarWeekRule $rule
	 * @param \System\DayOfWeek $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	public  function GetWeekOfYear($time, $rule, $firstDayOfWeek){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetYear($time){}
	/**
	 * @uses CalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day)
	 * @uses CalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::IsLeapMonth_1 ($year, $month)
	 * @uses CalendarMethodsOverride::IsLeapMonth_2 ($year, $month, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::GetLeapMonth_1 ($year)
	 * @uses CalendarMethodsOverride::GetLeapMonth_2 ($year, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::IsLeapYear_1 ($year)
	 * @uses CalendarMethodsOverride::IsLeapYear_2 ($year, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @uses CalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $era
	 * @param \System\DateTime& $result
	 * @return \System\Boolean
	 */
	protected  function TryToDateTime($year, $month, $day, $hour, $minute, $second, $millisecond, $era, $result){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	protected  function IsValidYear($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	protected  function IsValidMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	protected  function IsValidDay($year, $month, $day, $era){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TwoDigitYearMax(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_TwoDigitYearMax($value){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	public  function ToFourDigitYear($year){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @return \System\Int64|int
	 */
	protected static function TimeToTicks($hour, $minute, $second, $millisecond){}
	/**
	 * @param \System\Globalization\CalendarId $CalID
	 * @param \System\Int32|int $defaultYearValue
	 * @return \System\Int32|int
	 */
	protected static function GetSystemTwoDigitYearSetting($CalID, $defaultYearValue){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
