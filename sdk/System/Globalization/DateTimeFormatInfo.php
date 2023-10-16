<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeFormatInfoMethodsOverride
{
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetAllDateTimePatterns_1(){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetAllDateTimePatterns_2($format){}
}
/**
 */
class DateTimeFormatInfo extends \System\Object implements 
	\System\IFormatProvider,
	\System\ICloneable
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_isReadOnly;
	/**
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @property
	 */
	public readonly $InvariantInfo;
	/**
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @property
	 */
	public readonly $CurrentInfo;
	/**
	 * @var \System\String
	 * @property
	 */
	public $AMDesignator;
	/**
	 * @var \System\Globalization\Calendar
	 * @property
	 */
	public $Calendar;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DateSeparator;
	/**
	 * @var \System\DayOfWeek
	 * @property
	 */
	public $FirstDayOfWeek;
	/**
	 * @var \System\Globalization\CalendarWeekRule
	 * @property
	 */
	public $CalendarWeekRule;
	/**
	 * @var \System\String
	 * @property
	 */
	public $FullDateTimePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $LongDatePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $LongTimePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $MonthDayPattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PMDesignator;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $RFC1123Pattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $ShortDatePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $ShortTimePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $SortableDateTimePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $TimeSeparator;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $UniversalSortableDateTimePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $YearMonthPattern;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $AbbreviatedDayNames;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $ShortestDayNames;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $DayNames;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $AbbreviatedMonthNames;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $MonthNames;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $NativeCalendarName;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $AbbreviatedMonthGenitiveNames;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $MonthGenitiveNames;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CultureName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Culture(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LanguageName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetAbbreviatedDayOfWeekNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetAbbreviatedDayOfWeekNamesCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetSuperShortDayNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetSuperShortDayNamesCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetDayOfWeekNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetDayOfWeekNamesCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetAbbreviatedMonthNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetAbbreviatedMonthNamesCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetMonthNames(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function internalGetMonthNamesCore(){}
	/**
	 * @param \System\Globalization\CultureData $cultureData
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeOverridableProperties($cultureData, $calendarId){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function get_InvariantInfo(){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function get_CurrentInfo(){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function GetInstance($provider){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public  function GetFormat($formatType){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_AMDesignator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_AMDesignator($value){}
	/**
	 * @return \System\Globalization\Calendar
	 */
	public  function get_Calendar(){}
	/**
	 * @param \System\Globalization\Calendar $value
	 * @return \System\Void|void
	 */
	public  function set_Calendar($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_OptionalCalendars(){}
	/**
	 * @param \System\String|string $eraName
	 * @return \System\Int32|int
	 */
	public  function GetEra($eraName){}
	/**
	 * @return \System\String[]
	 */
	protected  function get_EraNames(){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\String|string
	 */
	public  function GetEraName($era){}
	/**
	 * @return \System\String[]
	 */
	protected  function get_AbbreviatedEraNames(){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\String|string
	 */
	public  function GetAbbreviatedEraName($era){}
	/**
	 * @return \System\String[]
	 */
	protected  function get_AbbreviatedEnglishEraNames(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DateSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DateSeparator($value){}
	/**
	 * @return \System\DayOfWeek
	 */
	public  function get_FirstDayOfWeek(){}
	/**
	 * @param \System\DayOfWeek $value
	 * @return \System\Void|void
	 */
	public  function set_FirstDayOfWeek($value){}
	/**
	 * @return \System\Globalization\CalendarWeekRule
	 */
	public  function get_CalendarWeekRule(){}
	/**
	 * @param \System\Globalization\CalendarWeekRule $value
	 * @return \System\Void|void
	 */
	public  function set_CalendarWeekRule($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullDateTimePattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_FullDateTimePattern($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_LongDatePattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_LongDatePattern($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnLongDatePatternChanged(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_LongTimePattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_LongTimePattern($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnLongTimePatternChanged(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_MonthDayPattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_MonthDayPattern($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PMDesignator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PMDesignator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RFC1123Pattern(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ShortDatePattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ShortDatePattern($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnShortDatePatternChanged(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ShortTimePattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ShortTimePattern($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnShortTimePatternChanged(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_SortableDateTimePattern(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_GeneralShortTimePattern(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_GeneralLongTimePattern(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DateTimeOffsetPattern(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_TimeSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_TimeSeparator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_UniversalSortableDateTimePattern(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_YearMonthPattern(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_YearMonthPattern($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnYearMonthPatternChanged(){}
	/**
	 * @param \System\String[] $values
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckNullValue($values, $length){}
	/**
	 * @return \System\String[]
	 */
	public  function get_AbbreviatedDayNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_AbbreviatedDayNames($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_ShortestDayNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_ShortestDayNames($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_DayNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_DayNames($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_AbbreviatedMonthNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_AbbreviatedMonthNames($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_MonthNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_MonthNames($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasSpacesInMonthNames(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasSpacesInDayNames(){}
	/**
	 * @param \System\Int32|int $month
	 * @param \System\Globalization\MonthNameStyles $style
	 * @param \System\Boolean $abbreviated
	 * @return \System\String|string
	 */
	protected  function InternalGetMonthName($month, $style, $abbreviated){}
	/**
	 * @param \System\Boolean $abbreviated
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetGenitiveMonthNames($abbreviated){}
	/**
	 * @return \System\String[]
	 */
	protected  function InternalGetLeapYearMonthNames(){}
	/**
	 * @param \System\DayOfWeek $dayofweek
	 * @return \System\String|string
	 */
	public  function GetAbbreviatedDayName($dayofweek){}
	/**
	 * @param \System\DayOfWeek $dayOfWeek
	 * @return \System\String|string
	 */
	public  function GetShortestDayName($dayOfWeek){}
	/**
	 * @param \System\String[] $patterns1
	 * @param \System\String[] $patterns2
	 * @param \System\String|string $connectString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCombinedPatterns($patterns1, $patterns2, $connectString){}
	/**
	 * @uses DateTimeFormatInfoMethodsOverride::GetAllDateTimePatterns_1 ()
	 * @uses DateTimeFormatInfoMethodsOverride::GetAllDateTimePatterns_2 ($format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAllDateTimePatterns(mixed ...$args){}
	/**
	 * @param \System\DayOfWeek $dayofweek
	 * @return \System\String|string
	 */
	public  function GetDayName($dayofweek){}
	/**
	 * @param \System\Int32|int $month
	 * @return \System\String|string
	 */
	public  function GetAbbreviatedMonthName($month){}
	/**
	 * @param \System\Int32|int $month
	 * @return \System\String|string
	 */
	public  function GetMonthName($month){}
	/**
	 * @param \System\String[] $patterns
	 * @param \System\String|string $defaultPattern
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMergedPatterns($patterns, $defaultPattern){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AllYearMonthPatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AllShortDatePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AllShortTimePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AllLongDatePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AllLongTimePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UnclonedYearMonthPatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UnclonedShortDatePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UnclonedLongDatePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UnclonedShortTimePatterns(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UnclonedLongTimePatterns(){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function ReadOnly($dtfi){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NativeCalendarName(){}
	/**
	 * @param \System\String[] $patterns
	 * @param \System\Char $format
	 * @return \System\Void|void
	 */
	public  function SetAllDateTimePatterns($patterns, $format){}
	/**
	 * @return \System\String[]
	 */
	public  function get_AbbreviatedMonthGenitiveNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_AbbreviatedMonthGenitiveNames($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_MonthGenitiveNames(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_MonthGenitiveNames($value){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DecimalSeparator(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_FullTimeSpanPositivePattern(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_FullTimeSpanNegativePattern(){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	protected  function get_CompareInfo(){}
	/**
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\Boolean $styles
	 * @return \System\Void|void
	 */
	protected static function ValidateStyles($style, $styles){}
	/**
	 * @return \System\Globalization\DateTimeFormatFlags
	 */
	protected  function get_FormatFlags(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeFormatFlags(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasForceTwoDigitYears(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasYearMonthAdjustment(){}
	/**
	 * @param \System\Int32& $year
	 * @param \System\Int32& $month
	 * @param \System\Boolean $parsedMonthName
	 * @return \System\Boolean
	 */
	protected  function YearMonthAdjustment($year, $month, $parsedMonthName){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	protected static function GetJapaneseCalendarDTFI(){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	protected static function GetTaiwanCalendarDTFI(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearTokenHashTable(){}
	/**
	 * @return \System\Globalization\TokenHashValue[]
	 */
	protected  function CreateTokenHashTable(){}
	/**
	 * @param \System\Globalization\TokenHashValue[] $temp
	 * @param \System\ReadOnlySpan_1 $monthPostfix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddMonthNames($temp, $monthPostfix){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Boolean& $badFormat
	 * @param \System\Int32& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseHebrewNumber($str, $badFormat, $number){}
	/**
	 * @param \System\Char $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsHebrewChar($ch){}
	/**
	 * @param \System\String|string $tokenString
	 * @param \System\Char $nextCh
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsAllowedJapaneseTokenFollowedByNonSpaceLetter($tokenString, $nextCh){}
	/**
	 * @param \System\TokenType $TokenMask
	 * @param \System\TokenType& $tokenType
	 * @param \System\Int32& $tokenValue
	 * @param \System\__DTString& $str
	 * @return \System\Boolean
	 */
	protected  function Tokenize($TokenMask, $tokenType, $tokenValue, $str){}
	/**
	 * @param \System\Globalization\TokenHashValue[] $hashTable
	 * @param \System\String|string $str
	 * @param \System\Char $ch
	 * @param \System\TokenType $tokenType
	 * @param \System\Int32|int $tokenValue
	 * @param \System\Int32|int $pos
	 * @param \System\Int32|int $hashcode
	 * @param \System\Int32|int $hashProbe
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertAtCurrentHashNode($hashTable, $str, $ch, $tokenType, $tokenValue, $pos, $hashcode, $hashProbe){}
	/**
	 * @param \System\Globalization\TokenHashValue[] $hashTable
	 * @param \System\String|string $str
	 * @param \System\TokenType $tokenType
	 * @param \System\Int32|int $tokenValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertHash($hashTable, $str, $tokenType, $tokenValue){}
	/**
	 * @param \System\String|string $string1
	 * @param \System\Int32|int $offset1
	 * @param \System\Int32|int $length1
	 * @param \System\String|string $string2
	 * @param \System\Int32|int $offset2
	 * @param \System\Int32|int $length2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareStringIgnoreCaseOptimized($string1, $offset1, $length1, $string2, $offset2, $length2){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
