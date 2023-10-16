<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait JapaneseCalendarMethodsOverride
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
class JapaneseCalendar extends \System\Globalization\Calendar implements 
	\System\ICloneable
{
	/**
	 * @var \System\Globalization\GregorianCalendarHelper
	 * @field
	 */
	protected $_helper;
	/**
	 * @var \System\Globalization\Calendar
	 * @field
	 */
	protected $s_defaultInstance;
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
	 * @return \System\Globalization\EraInfo[]
	 */
	protected static function GetEraInfo(){}
	/**
	 * @return \System\Globalization\Calendar
	 */
	protected static function GetDefaultInstance(){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::GetDaysInMonth_1 ($year, $month, $era)
	 * @uses JapaneseCalendarMethodsOverride::GetDaysInMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInMonth(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::GetDaysInYear_1 ($year, $era)
	 * @uses JapaneseCalendarMethodsOverride::GetDaysInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDaysInYear(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::GetMonthsInYear_1 ($year, $era)
	 * @uses JapaneseCalendarMethodsOverride::GetMonthsInYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMonthsInYear(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::IsLeapDay_1 ($year, $month, $day, $era)
	 * @uses JapaneseCalendarMethodsOverride::IsLeapDay_2 ($year, $month, $day)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapDay(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::IsLeapYear_1 ($year, $era)
	 * @uses JapaneseCalendarMethodsOverride::IsLeapYear_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapYear(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::GetLeapMonth_1 ($year, $era)
	 * @uses JapaneseCalendarMethodsOverride::GetLeapMonth_2 ($year)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLeapMonth(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::IsLeapMonth_1 ($year, $month, $era)
	 * @uses JapaneseCalendarMethodsOverride::IsLeapMonth_2 ($year, $month)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsLeapMonth(mixed ...$args){}
	/**
	 * @uses JapaneseCalendarMethodsOverride::ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)
	 * @uses JapaneseCalendarMethodsOverride::ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
	/**
	 * @return \System\String[]
	 */
	protected static function EraNames(){}
	/**
	 * @return \System\String[]
	 */
	protected static function AbbrevEraNames(){}
	/**
	 * @return \System\String[]
	 */
	protected static function EnglishEraNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetJapaneseEras(){}
	/**
	 * @param \System\String[] $eraNames
	 * @param \System\Int32|int $eraIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAbbreviatedEraName($eraNames, $eraIndex){}
	/**
	 * @param \System\Int32|int $era
	 * @param \System\DateTime& $dateTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetJapaneseEraStartDate($era, $dateTime){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsGetJapaneseEras(){}
	/**
	 * @param \System\Globalization\EraInfo $a
	 * @param \System\Globalization\EraInfo $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompareEraRanges($a, $b){}
	/**
	 * @param \System\String|string $value
	 * @param \System\String|string $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEraFromValue($value, $data){}
}
