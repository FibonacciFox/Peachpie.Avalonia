<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KoreanCalendarMethodsOverride
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_1($year, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_2($year){}
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
class KoreanCalendar extends \System\Globalization\Calendar implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $KoreanEra;
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
	 * @uses KoreanCalendarMethodsOverride::GetDaysInMonth_1 ($year, $month, $era)
	 * @uses KoreanCalendarMethodsOverride::GetDaysInMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::GetDaysInYear_1 ($year, $era)
	 * @uses KoreanCalendarMethodsOverride::GetDaysInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::GetMonthsInYear_1 ($year, $era)
	 * @uses KoreanCalendarMethodsOverride::GetMonthsInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day, $era)
	 * @uses KoreanCalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::IsLeapYear_1 ($year, $era)
	 * @uses KoreanCalendarMethodsOverride::IsLeapYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::GetLeapMonth_1 ($year, $era)
	 * @uses KoreanCalendarMethodsOverride::GetLeapMonth_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::IsLeapMonth_1 ($year, $month, $era)
	 * @uses KoreanCalendarMethodsOverride::IsLeapMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses KoreanCalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @uses KoreanCalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
}
