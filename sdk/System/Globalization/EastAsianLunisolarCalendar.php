<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EastAsianLunisolarCalendarMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetYear_1($year, $time){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetYear_2($time){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_1($year, $month, $era){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetDaysInMonth_2($year, $month){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_1($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_2($year, $month, $day, $hour, $minute, $second, $millisecond){}
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
	#[MethodOverride] public  function IsLeapMonth_1($year, $month, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapMonth_2($year, $month){}
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
	#[MethodOverride] public  function IsLeapYear_1($year, $era){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsLeapYear_2($year){}
}
/**
 */
class EastAsianLunisolarCalendar extends \System\Globalization\Calendar implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_twoDigitYearMax;
	/**
	 * @var \System\Globalization\CalendarAlgorithmType
	 * @property
	 */
	public readonly $AlgorithmType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TwoDigitYearMax;
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
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetSexagenaryYear($time){}
	/**
	 * @param \System\Int32|int $sexagenaryYear
	 * @return \System\Int32|int
	 */
	public  function GetCelestialStem($sexagenaryYear){}
	/**
	 * @param \System\Int32|int $sexagenaryYear
	 * @return \System\Int32|int
	 */
	public  function GetTerrestrialBranch($sexagenaryYear){}
	/**
	 * @param \System\Int32|int $LunarYear
	 * @param \System\Int32|int $Index
	 * @return \System\Int32|int
	 */
	protected  function GetYearInfo($LunarYear, $Index){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetYear_1 ($year, $time)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetYear_2 ($time)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetYear(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function GetGregorianYear($year, $era){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MinCalendarYear(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxCalendarYear(){}
	/**
	 * @return \System\Globalization\EraInfo[]
	 */
	protected  function get_CalEraInfo(){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_MinDate(){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_MaxDate(){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function MinEraCalendarYear($era){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function MaxEraCalendarYear($era){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\Void|void
	 */
	protected  function CheckTicksRange($ticks){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected  function CheckEraRange($era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function CheckYearRange($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function CheckYearMonthRange($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @return \System\Int32|int
	 */
	protected  function InternalGetDaysInMonth($year, $month){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetDaysInMonth_1 ($year, $month, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetDaysInMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @param \System\Int32|int $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GregorianIsLeapYear($y){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
	/**
	 * @param \System\Int32|int $solarYear
	 * @param \System\Int32|int $solarMonth
	 * @param \System\Int32|int $solarDate
	 * @param \System\Int32& $lunarYear
	 * @param \System\Int32& $lunarMonth
	 * @param \System\Int32& $lunarDate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GregorianToLunar($solarYear, $solarMonth, $solarDate, $lunarYear, $lunarMonth, $lunarDate){}
	/**
	 * @param \System\Int32|int $lunarYear
	 * @param \System\Int32|int $lunarMonth
	 * @param \System\Int32|int $lunarDate
	 * @param \System\Int32& $solarYear
	 * @param \System\Int32& $solarMonth
	 * @param \System\Int32& $solarDay
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LunarToGregorian($lunarYear, $lunarMonth, $lunarDate, $solarYear, $solarMonth, $solarDay){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LunarToTime($time, $year, $month, $day){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32& $year
	 * @param \System\Int32& $month
	 * @param \System\Int32& $day
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TimeToLunar($time, $year, $month, $day){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetDaysInYear_1 ($year, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetDaysInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetMonthsInYear_1 ($year, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetMonthsInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapMonth_1 ($year, $month, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetLeapMonth_1 ($year, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::GetLeapMonth_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Boolean
	 */
	protected  function InternalIsLeapYear($year){}
	/**
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapYear_1 ($year, $era)
	 * @uses EastAsianLunisolarCalendarMethodsOverride::IsLeapYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
}
