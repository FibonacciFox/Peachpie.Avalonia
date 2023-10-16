<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UmAlQuraCalendarMethodsOverride
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
class UmAlQuraCalendar extends \System\Globalization\Calendar implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $UmAlQuraEra;
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
	#[MethodPrivate] static function InitDateMapping(){}
	/**
	 * @param \System\Int32|int $HijriYear
	 * @param \System\Int32|int $HijriMonth
	 * @param \System\Int32|int $HijriDay
	 * @param \System\Int32& $yg
	 * @param \System\Int32& $mg
	 * @param \System\Int32& $dg
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertHijriToGregorian($HijriYear, $HijriMonth, $HijriDay, $yg, $mg, $dg){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAbsoluteDateUmAlQura($year, $month, $day){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\Void|void
	 */
	protected static function CheckTicksRange($ticks){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckEraRange($era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckYearRange($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckYearMonthRange($year, $month, $era){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32& $HijriYear
	 * @param \System\Int32& $HijriMonth
	 * @param \System\Int32& $HijriDay
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertGregorianToHijri($time, $HijriYear, $HijriMonth, $HijriDay){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $part
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDatePart($time, $part){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::GetDaysInMonth_1 ($year, $month, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::GetDaysInMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	protected static function RealGetDaysInYear($year){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::GetDaysInYear_1 ($year, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::GetDaysInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::GetMonthsInYear_1 ($year, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::GetMonthsInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::GetLeapMonth_1 ($year, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::GetLeapMonth_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapMonth_1 ($year, $month, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapYear_1 ($year, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::IsLeapYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
	/**
	 * @uses UmAlQuraCalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @uses UmAlQuraCalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
}
