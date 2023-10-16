<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CultureDataMethodsOverride
{
	/**
	 * @return \System\Globalization\CultureData
	 */
	#[MethodOverride] protected static function GetCultureData_1($cultureName, $useUserOverride){}
	/**
	 * @return \System\Globalization\CultureData
	 */
	#[MethodOverride] protected static function GetCultureData_2($culture, $bUseUserOverride){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetLocaleInfoCore_1($type){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function GetLocaleInfoCore_2($type, $uiCultureName){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function GetLocaleInfoCore_3($localeName, $type, $uiCultureName){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetLocaleInfoCoreUserOverride_1($type){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function GetLocaleInfoCoreUserOverride_2($type){}
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] private  function GetLocaleInfoCoreUserOverride_3($type){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetLocaleInfo_1($type, $uiCultureName){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetLocaleInfo_2($localeName, $type, $uiCultureName){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IcuGetLocaleInfo_3($type){}
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] private  function IcuGetLocaleInfo_4($type){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetTimeFormatString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetTimeFormatString_2($shortFormat){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function GetLocaleInfoEx_1($localeName, $field){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetLocaleInfoEx_2($lpLocaleName, $lcType, $lpLCData, $cchData){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function NlsGetLocaleInfo_1($type){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function NlsGetLocaleInfo_2($localeName, $type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function NlsGetLocaleInfo_3($type){}
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] private  function NlsGetLocaleInfo_4($type){}
}
/**
 */
class CultureData extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_RegionNames(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_InteropName(){}
	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Boolean $useUserOverride
	 * @return \System\Globalization\CultureData
	 */
	protected static function GetCultureDataForRegion($cultureName, $useUserOverride){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ClearCachedData(){}
	/**
	 * @param \System\Globalization\CultureTypes $types
	 * @return \System\Globalization\CultureInfo[]
	 */
	protected static function GetCultures($types){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCultureWithInvariantData(){}
	/**
	 * @return \System\Globalization\CultureData
	 */
	protected static function get_Invariant(){}
	/**
	 * @uses CultureDataMethodsOverride::GetCultureData_1 ($cultureName, $useUserOverride)
	 * @uses CultureDataMethodsOverride::GetCultureData_2 ($culture, $bUseUserOverride)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCultureData(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Boolean& $isNeutralName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeCultureName($name, $isNeutralName){}
	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Boolean $useUserOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCultureData($cultureName, $useUserOverride){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitCompatibilityCultureData(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_CultureName(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_UseUserOverride(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ParentName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_DisplayName(){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetLanguageDisplayNameCore($cultureName){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_EnglishName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_NativeName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_SpecificCultureName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_TwoLetterISOLanguageName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ThreeLetterISOLanguageName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ThreeLetterWindowsLanguageName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LocalizedLanguageName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_EnglishLanguageName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_NativeLanguageName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_RegionName(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_GeoId(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_LocalizedCountryName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_EnglishCountryName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_NativeCountryName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_TwoLetterISOCountryName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ThreeLetterISOCountryName(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_KeyboardLayoutId(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_SCONSOLEFALLBACKNAME(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function get_NumberGroupSizes(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_NaNSymbol(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PositiveInfinitySymbol(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_NegativeInfinitySymbol(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PercentNegativePattern(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PercentPositivePattern(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PercentSymbol(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PerMilleSymbol(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_CurrencySymbol(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ISOCurrencySymbol(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_CurrencyEnglishName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_CurrencyNativeName(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function get_CurrencyGroupSizes(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MeasurementSystem(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_ListSeparator(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_AMDesignator(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_PMDesignator(){}
	/**
	 * @return \System\String[]
	 */
	protected  function get_LongTimes(){}
	/**
	 * @return \System\String[]
	 */
	protected  function get_ShortTimes(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeriveShortTimesFromLong(){}
	/**
	 * @param \System\String|string $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StripSecondsFromPattern($time){}
	/**
	 * @param \System\String|string $time
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& $containsSpace
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexOfNextTokenAfterSeconds($time, $index, $containsSpace){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_FirstDayOfWeek(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_CalendarWeekRule(){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function ShortDates($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function LongDates($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function YearMonths($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function DayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function AbbreviatedDayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function SuperShortDayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function MonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function GenitiveMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function AbbreviatedMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function AbbreviatedGenitiveMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function LeapYearMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected  function MonthDay($calendarId){}
	/**
	 * @return \System\Globalization\CalendarId[]
	 */
	protected  function get_CalendarIds(){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected  function CalendarName($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\Globalization\CalendarData
	 */
	protected  function GetCalendar($calendarId){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsRightToLeft(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReadingLayout(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_TextInfoName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_SortName(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsSupplementalCustomCulture(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_ANSICodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_OEMCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MacCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_EBCDICCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_LCID(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsNeutralCulture(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsInvariantCulture(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsReplacementCulture(){}
	/**
	 * @return \System\Globalization\Calendar
	 */
	protected  function get_DefaultCalendar(){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function EraNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function AbbrevEraNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]
	 */
	protected  function AbbreviatedEnglishEraNames($calendarId){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_TimeSeparator(){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected  function DateSeparator($calendarId){}
	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnescapeNlsString($str, $start, $end){}
	/**
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeSeparator($format){}
	/**
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateSeparator($format){}
	/**
	 * @param \System\String|string $format
	 * @param \System\String|string $timeParts
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSeparator($format, $timeParts){}
	/**
	 * @param \System\String|string $format
	 * @param \System\Int32|int $startIndex
	 * @param \System\String|string $timeParts
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IndexOfTimePart($format, $startIndex, $timeParts){}
	/**
	 * @param \System\Int32|int $cultureId
	 * @return \System\Boolean
	 */
	protected static function IsCustomCultureId($cultureId){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNativeDigits(){}
	/**
	 * @param \System\Globalization\NumberFormatInfo $nfi
	 * @return \System\Void|void
	 */
	protected  function GetNFIValues($nfi){}
	/**
	 * @param \System\String|string $testString
	 * @return \System\String|string
	 */
	protected static function AnsiToLower($testString){}
	/**
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCore_1 ($type)
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCore_2 ($type, $uiCultureName)
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCore_3 ($localeName, $type, $uiCultureName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLocaleInfoCore(mixed ...$args){}
	/**
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCoreUserOverride_1 ($type)
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCoreUserOverride_2 ($type)
	 * @uses CultureDataMethodsOverride::GetLocaleInfoCoreUserOverride_3 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetLocaleInfoCoreUserOverride(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitIcuCultureDataCore(){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\String& $windowsName
	 * @return \System\Boolean
	 */
	protected static function GetLocaleName($localeName, $windowsName){}
	/**
	 * @uses CultureDataMethodsOverride::IcuGetLocaleInfo_1 ($type, $uiCultureName)
	 * @uses CultureDataMethodsOverride::IcuGetLocaleInfo_2 ($localeName, $type, $uiCultureName)
	 * @uses CultureDataMethodsOverride::IcuGetLocaleInfo_3 ($type)
	 * @uses CultureDataMethodsOverride::IcuGetLocaleInfo_4 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IcuGetLocaleInfo(mixed ...$args){}
	/**
	 * @uses CultureDataMethodsOverride::IcuGetTimeFormatString_1 ()
	 * @uses CultureDataMethodsOverride::IcuGetTimeFormatString_2 ($shortFormat)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IcuGetTimeFormatString(mixed ...$args){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetLanguageDisplayName($cultureName){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean
	 */
	protected static function IcuIsEnsurePredefinedLocaleName($name){}
	/**
	 * @param \System\ReadOnlySpan_1 $icuFormatString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertIcuTimeFormatString($icuFormatString){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuLocaleNameToLCID($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetGeoId($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetDigitSubstitution($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetListSeparator($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetThreeLetterWindowsLanguageName($cultureName){}
	/**
	 * @param \System\Globalization\CultureTypes $types
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuEnumCultures($types){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuGetConsoleFallbackName($cultureName){}
	/**
	 * @param \System\String|string $subject
	 * @param \System\Int32& $indexOfUnderscore
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidCultureName($subject, $indexOfUnderscore){}
	/**
	 * @uses CultureDataMethodsOverride::GetLocaleInfoEx_1 ($localeName, $field)
	 * @uses CultureDataMethodsOverride::GetLocaleInfoEx_2 ($lpLocaleName, $lcType, $lpLCData, $cchData)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLocaleInfoEx(mixed ...$args){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $field
	 * @return \System\Int32|int
	 */
	protected static function GetLocaleInfoExInt($localeName, $field){}
	/**
	 * @uses CultureDataMethodsOverride::NlsGetLocaleInfo_1 ($type)
	 * @uses CultureDataMethodsOverride::NlsGetLocaleInfo_2 ($localeName, $type)
	 * @uses CultureDataMethodsOverride::NlsGetLocaleInfo_3 ($type)
	 * @uses CultureDataMethodsOverride::NlsGetLocaleInfo_4 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NlsGetLocaleInfo(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean
	 */
	protected static function NlsIsEnsurePredefinedLocaleName($name){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetTimeFormatString(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetFirstDayOfWeek(){}
	/**
	 * @param \System\String|string $regionName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsGetCultureDataFromRegionName($regionName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetLanguageDisplayName($cultureName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetRegionDisplayName(){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $lctype
	 * @param \System\Boolean $useUserOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocaleInfoFromLCType($localeName, $lctype, $useUserOverride){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	protected static function ReescapeWin32String($str){}
	/**
	 * @param \System\String[] $array
	 * @return \System\String[]
	 */
	protected static function ReescapeWin32Strings($array){}
	/**
	 * @param \System\String|string $win32Str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertWin32GroupString($win32Str){}
	/**
	 * @param \System\Int32|int $iTemp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertFirstDayOfWeekMonToSun($iTemp){}
	/**
	 * @param \System\Char* $lpLocaleString
	 * @param \System\UInt32 $flags
	 * @param \System\Void* $contextHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumSystemLocalesProc($lpLocaleString, $flags, $contextHandle){}
	/**
	 * @param \System\Char* $lpLocaleString
	 * @param \System\UInt32 $flags
	 * @param \System\Void* $contextHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumAllSystemLocalesProc($lpLocaleString, $flags, $contextHandle){}
	/**
	 * @param \System\Char* $lpTimeFormatString
	 * @param \System\Void* $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnumTimeCallback($lpTimeFormatString, $lParam){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $dwFlags
	 * @param \System\Boolean $useUserOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function nativeEnumTimeFormats($localeName, $dwFlags, $useUserOverride){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsLocaleNameToLCID($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetThreeLetterWindowsLanguageName($cultureName){}
	/**
	 * @param \System\Globalization\CultureTypes $types
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsEnumCultures($types){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetConsoleFallbackName($cultureName){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_NlsIsReplacementCulture(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitCultureDataCore(){}
	/**
	 * @param \System\Boolean $useUserOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitUserOverride($useUserOverride){}
	/**
	 * @return \System\Globalization\CultureData
	 */
	protected static function GetCurrentRegionData(){}
	/**
	 * @param \System\Int32|int $culture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LCIDToLocaleName($culture){}
	/**
	 * @param \System\Boolean $shortFormat
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTimeFormatsCore($shortFormat){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAnsiCodePage($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOemCodePage($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMacCodePage($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEbcdicCodePage($cultureName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ShouldUseUserOverrideNlsData(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
