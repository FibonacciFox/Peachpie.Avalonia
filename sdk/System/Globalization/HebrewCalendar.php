<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HebrewCalendarMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_1($year, $month, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_2($year, $month){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInYear_1($year, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInYear_2($year){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetMonthsInYear_1($year, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetMonthsInYear_2($year){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapDay_1($year, $month, $day, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapDay_2($year, $month, $day){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetLeapMonth_1($year, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetLeapMonth_2($year){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapMonth_1($year, $month, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapMonth_2($year, $month){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_1($year, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_2($year){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_1($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_2($year, $month, $day, $hour, $minute, $second, $millisecond){}
}
/**
 */
class HebrewCalendar extends \System\Globalization\Calendar implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $HebrewEra;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_twoDigitYearMax;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_HebrewTable(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_LunarMonthLen(){}
	/**
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $era
	 * @param \System\String|string $varName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckHebrewYearValue($y, $era, $varName){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckHebrewMonthValue($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckHebrewDayValue($year, $month, $day, $era){}
	/**
	 * @param \System\Int32|int $era
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckEraRange($era){}
	/**
	 * @param \System\Int64|int $ticks
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckTicksRange($ticks){}
	/**
	 * @param \System\Globalization\DateBuffer $result
	 * @param \System\Int32|int $part
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResult($result, $part){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @param \System\Globalization\DateBuffer $lunarDate
	 * @return \System\Int32|int
	 */
	protected static function GetLunarMonthDay($gregorianYear, $lunarDate){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32|int $part
	 * @return \System\Int32|int
	 */
	protected  function GetDatePart($ticks, $part){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected static function GetHebrewYearType($year, $era){}
	/**
	 * @uses HebrewCalendarMethodsOverride::GetDaysInMonth_1 ($year, $month, $era)
	 * @uses HebrewCalendarMethodsOverride::GetDaysInMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::GetDaysInYear_1 ($year, $era)
	 * @uses HebrewCalendarMethodsOverride::GetDaysInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::GetMonthsInYear_1 ($year, $era)
	 * @uses HebrewCalendarMethodsOverride::GetMonthsInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day, $era)
	 * @uses HebrewCalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::GetLeapMonth_1 ($year, $era)
	 * @uses HebrewCalendarMethodsOverride::GetLeapMonth_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::IsLeapMonth_1 ($year, $month, $era)
	 * @uses HebrewCalendarMethodsOverride::IsLeapMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses HebrewCalendarMethodsOverride::IsLeapYear_1 ($year, $era)
	 * @uses HebrewCalendarMethodsOverride::IsLeapYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
	/**
	 * @param \System\Int32|int $lunarYearType
	 * @param \System\Int32|int $month1
	 * @param \System\Int32|int $day1
	 * @param \System\Int32|int $month2
	 * @param \System\Int32|int $day2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayDifference($lunarYearType, $month1, $day1, $month2, $day2){}
	/**
	 * @param \System\Int32|int $hebrewYear
	 * @param \System\Int32|int $hebrewMonth
	 * @param \System\Int32|int $hebrewDay
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HebrewToGregorian($hebrewYear, $hebrewMonth, $hebrewDay, $hour, $minute, $second, $millisecond){}
	/**
	 * @uses HebrewCalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @uses HebrewCalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
}
