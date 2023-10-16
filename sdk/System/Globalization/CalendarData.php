<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CalendarDataMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function EnumCalendarInfo_1($localeName, $calendarId, $dataType, $calendarData){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function EnumCalendarInfo_2($localeName, $calendarId, $dataType, $callbackContext){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function EnumCalendarInfoCallback_1($calendarStringPtr, $context){}
	/**
	 * @return \\BOOL
	 */
	#[MethodOverride] private static function EnumCalendarInfoCallback_2($lpCalendarInfoString, $calendar, $pReserved, $lParam){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function CallGetCalendarInfoEx_1($localeName, $calendar, $calType, $data){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function CallGetCalendarInfoEx_2($localeName, $calendar, $calType, $data){}
}
/**
 */
class CalendarData extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $sNativeName;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saShortDates;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saYearMonths;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saLongDates;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $sMonthDay;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saEraNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saAbbrevEraNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saAbbrevEnglishEraNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saDayNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saAbbrevDayNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saSuperShortDayNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saMonthNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saAbbrevMonthNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saMonthGenitiveNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saAbbrevMonthGenitiveNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $saLeapYearMonthNames;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $iTwoDigitYearMax;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $bUseUserOverrides;
	/**
	 * @var \System\Globalization\CalendarData
	 * @field
	 */
	protected readonly $Invariant;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateInvariant(){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeEraNames($localeName, $calendarId){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeAbbreviatedEraNames($localeName, $calendarId){}
	/**
	 * @param \System\Globalization\Calendar $calendar
	 * @return \System\Int32|int
	 */
	protected static function GetCalendarCurrentEra($calendar){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CalendarIdToCultureName($calendarId){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SystemSupportsTaiwaneseCalendar(){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuLoadCalendarDataFromSystem($localeName, $calendarId){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId[] $calendars
	 * @return \System\Int32|int
	 */
	protected static function IcuGetCalendars($localeName, $calendars){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\String& $calendarString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCalendarInfo($localeName, $calendarId, $dataType, $calendarString){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\String[]& $datePatterns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumDatePatterns($localeName, $calendarId, $dataType, $datePatterns){}
	/**
	 * @param \System\Collections\Generic\List_1 $shortDatePatterns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FixDefaultShortDatePattern($shortDatePatterns){}
	/**
	 * @param \System\String|string $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeDatePattern($input){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Text\ValueStringBuilder& $destination
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeDayOfWeek($input, $destination, $index){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Char $value
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CountOccurrences($input, $value, $index){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\String[]& $monthNames
	 * @param \System\String& $leapHebrewMonthName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumMonthNames($localeName, $calendarId, $dataType, $monthNames, $leapHebrewMonthName){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\String[]& $eraNames
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumEraNames($localeName, $calendarId, $dataType, $eraNames){}
	/**
	 * @uses CalendarDataMethodsOverride::EnumCalendarInfo_1 ($localeName, $calendarId, $dataType, $calendarData)
	 * @uses CalendarDataMethodsOverride::EnumCalendarInfo_2 ($localeName, $calendarId, $dataType, $callbackContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnumCalendarInfo(mixed ...$args){}
	/**
	 * @uses CalendarDataMethodsOverride::EnumCalendarInfoCallback_1 ($calendarStringPtr, $context)
	 * @uses CalendarDataMethodsOverride::EnumCalendarInfoCallback_2 ($lpCalendarInfoString, $calendar, $pReserved, $lParam)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnumCalendarInfoCallback(mixed ...$args){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\Int32|int
	 */
	protected static function NlsGetTwoDigitYearMax($calendarId){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsSystemSupportsTaiwaneseCalendar(){}
	/**
	 * @uses CalendarDataMethodsOverride::CallGetCalendarInfoEx_1 ($localeName, $calendar, $calType, $data)
	 * @uses CalendarDataMethodsOverride::CallGetCalendarInfoEx_2 ($localeName, $calendar, $calType, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CallGetCalendarInfoEx(mixed ...$args){}
	/**
	 * @param \System\Char* $lpCalendarInfoString
	 * @param \System\UInt32 $calendar
	 * @param \System\IntPtr $reserved
	 * @param \System\Void* $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumCalendarsCallback($lpCalendarInfoString, $calendar, $reserved, $lParam){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LoadCalendarDataFromSystemCore($localeName, $calendarId){}
	/**
	 * @param \System\String|string $value
	 * @param \System\String[]& $destination
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InsertOrSwapOverride($value, $destination){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsLoadCalendarDataFromSystem($localeName, $calendarId){}
	/**
	 * @param \System\Globalization\CalendarId& $calendarId
	 * @param \System\String& $localeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeCalendarId($calendarId, $localeName){}
	/**
	 * @param \System\Globalization\CalendarId& $calendar
	 * @param \System\String& $localeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckSpecialCalendar($calendar, $localeName){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendar
	 * @param \System\UInt32 $calType
	 * @param \System\UInt32 $lcType
	 * @param \System\String[]& $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CallEnumCalendarInfo($localeName, $calendar, $calType, $lcType, $data){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendar
	 * @param \System\UInt32 $calType
	 * @param \System\String[]& $outputStrings
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCalendarDayInfo($localeName, $calendar, $calType, $outputStrings){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendar
	 * @param \System\UInt32 $calType
	 * @param \System\String[]& $outputStrings
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCalendarMonthInfo($localeName, $calendar, $calType, $outputStrings){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Boolean $useUserOverride
	 * @param \System\Globalization\CalendarId[] $calendars
	 * @return \System\Int32|int
	 */
	protected static function GetCalendarsCore($localeName, $useUserOverride, $calendars){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Boolean $useUserOverride
	 * @param \System\Globalization\CalendarId[] $calendars
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsGetCalendars($localeName, $useUserOverride, $calendars){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
