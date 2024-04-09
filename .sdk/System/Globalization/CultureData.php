<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CultureDataOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $cultureName
	 * @param \System\Boolean|bool $useUserOverride
	 * @return \System\Globalization\CultureData
	 */
	#[MethodOverride]protected static function GetCultureData_1 ($cultureName, $useUserOverride){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $culture
	 * @param \System\Boolean|bool $bUseUserOverride
	 * @return \System\Globalization\CultureData
	 */
	#[MethodOverride]protected static function GetCultureData_2 ($culture, $bUseUserOverride){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean& &$isNeutralName
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function NormalizeCultureName_1 ($name, &$isNeutralName){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\ReadOnlySpan_1 $extension [generic: System\Char]
	 * @param \System\Int32& &$collationStart
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function NormalizeCultureName_2 ($name, $extension, &$collationStart){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleNumberData $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetLocaleInfoCore_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleStringData $type
	 * @param \System\String|string $uiCultureName
	 * @return \System\String|string
	 */
	#[MethodOverride]private function GetLocaleInfoCore_2 ($type, $uiCultureName){}
	/**
	 * @deprecated
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CultureData+LocaleStringData $type
	 * @param \System\String|string $uiCultureName
	 * @return \System\String|string
	 */
	#[MethodOverride]private function GetLocaleInfoCore_3 ($localeName, $type, $uiCultureName){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleNumberData $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetLocaleInfoCoreUserOverride_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleStringData $type
	 * @return \System\String|string
	 */
	#[MethodOverride]private function GetLocaleInfoCoreUserOverride_2 ($type){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleGroupingData $type
	 * @return \System\Int32
	 */
	#[MethodOverride]private function GetLocaleInfoCoreUserOverride_3 ($type){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleStringData $type
	 * @param \System\String|string $uiCultureName
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetLocaleInfo_1 ($type, $uiCultureName){}
	/**
	 * @deprecated
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CultureData+LocaleStringData $type
	 * @param \System\String|string $uiCultureName
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetLocaleInfo_2 ($localeName, $type, $uiCultureName){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleNumberData $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function IcuGetLocaleInfo_3 ($type){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureData+LocaleGroupingData $type
	 * @return \System\Int32
	 */
	#[MethodOverride]private function IcuGetLocaleInfo_4 ($type){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetTimeFormatString_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $shortFormat
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetTimeFormatString_2 ($shortFormat){}
}
final class CultureData extends \System\Object
{
	use CultureDataOverride;

	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Boolean|bool $useUserOverride
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
	private static function CreateCultureWithInvariantData(){}
	/**
	 * @uses CultureDataOverride::GetCultureData_1 <br>protected , args: ($cultureName, $useUserOverride)<br>
	 * @uses CultureDataOverride::GetCultureData_2 <br>protected , args: ($culture, $bUseUserOverride)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\CultureData|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCultureData (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CultureDataOverride::NormalizeCultureName_1 <br>private , args: ($name, &$isNeutralName)<br>
	 * @uses CultureDataOverride::NormalizeCultureName_2 <br>private , args: ($name, $extension, &$collationStart)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function NormalizeCultureName (\override ...$args){}
	private static function CreateCultureData($cultureName, $useUserOverride){}
	private function InitCompatibilityCultureData(){}
	private function GetLanguageDisplayNameCore($cultureName){}
	private function DeriveShortTimesFromLong(){}
	private static function StripSecondsFromPattern($time){}
	private static function GetIndexOfNextTokenAfterSeconds($time, $index, &$containsSpace){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function ShortDates($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function LongDates($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function YearMonths($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function DayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function AbbreviatedDayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function SuperShortDayNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function MonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function GenitiveMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function AbbreviatedMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function AbbreviatedGenitiveMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function LeapYearMonthNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected function MonthDay($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected function CalendarName($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\Globalization\CalendarData
	 */
	protected function GetCalendar($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function EraNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function AbbrevEraNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String[]|array
	 */
	protected function AbbreviatedEnglishEraNames($calendarId){}
	/**
	 * @param \System\Globalization\CalendarId $calendarId
	 * @return \System\String|string
	 */
	protected function DateSeparator($calendarId){}
	private static function UnescapeNlsString($str, $start, $end){}
	private static function GetTimeSeparator($format){}
	private static function GetDateSeparator($format){}
	private static function GetSeparator($format, $timeParts){}
	private static function IndexOfTimePart($format, $startIndex, $timeParts){}
	/**
	 * @param \System\Int32|int $cultureId
	 * @return \System\Boolean|bool
	 */
	protected static function IsCustomCultureId($cultureId){}
	private function GetNativeDigits(){}
	/**
	 * @param \System\Globalization\NumberFormatInfo $nfi
	 * @return \System\Void|void
	 */
	protected function GetNFIValues($nfi){}
	/**
	 * @param \System\String|string $testString
	 * @return \System\String|string
	 */
	protected static function AnsiToLower($testString){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CultureDataOverride::GetLocaleInfoCore_1 <br>private , args: ($type)<br>
	 * @uses CultureDataOverride::GetLocaleInfoCore_2 <br>private , args: ($type, $uiCultureName)<br>
	 * @uses CultureDataOverride::GetLocaleInfoCore_3 <br>private , args: ($localeName, $type, $uiCultureName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function GetLocaleInfoCore (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CultureDataOverride::GetLocaleInfoCoreUserOverride_1 <br>private , args: ($type)<br>
	 * @uses CultureDataOverride::GetLocaleInfoCoreUserOverride_2 <br>private , args: ($type)<br>
	 * @uses CultureDataOverride::GetLocaleInfoCoreUserOverride_3 <br>private , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\String|string|\System\Int32|mixed|\override
	 */
	#[MethodOverridePrivate]function GetLocaleInfoCoreUserOverride (\override ...$args){}
	private function InitIcuCultureDataCore(){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\String& &$windowsName
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleName($localeName, &$windowsName){}
	/**
	 * @param \System\String& &$windowsName
	 * @return \System\Boolean|bool
	 */
	protected static function GetDefaultLocaleName(&$windowsName){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CultureDataOverride::IcuGetLocaleInfo_1 <br>private , args: ($type, $uiCultureName)<br>
	 * @uses CultureDataOverride::IcuGetLocaleInfo_2 <br>private , args: ($localeName, $type, $uiCultureName)<br>
	 * @uses CultureDataOverride::IcuGetLocaleInfo_3 <br>private , args: ($type)<br>
	 * @uses CultureDataOverride::IcuGetLocaleInfo_4 <br>private , args: ($type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Int32|int|\System\Int32|mixed|\override
	 */
	#[MethodOverridePrivate]function IcuGetLocaleInfo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CultureDataOverride::IcuGetTimeFormatString_1 <br>private , args: ()<br>
	 * @uses CultureDataOverride::IcuGetTimeFormatString_2 <br>private , args: ($shortFormat)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function IcuGetTimeFormatString (\override ...$args){}
	private function IcuGetLanguageDisplayName($cultureName){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	protected static function IcuIsEnsurePredefinedLocaleName($name){}
	private static function ConvertIcuTimeFormatString($icuFormatString){}
	private static function IcuLocaleNameToLCID($cultureName){}
	private static function IcuGetGeoId($cultureName){}
	private static function IcuGetDigitSubstitution($cultureName){}
	private static function IcuGetListSeparator($cultureName){}
	private static function IcuGetThreeLetterWindowsLanguageName($cultureName){}
	private static function IcuEnumCultures($types){}
	private static function IcuGetConsoleFallbackName($cultureName){}
	private static function IsValidCultureName($subject, &$indexOfUnderscore, &$indexOfExtensions){}
	private function InitCultureDataCore(){}
	private static function LCIDToLocaleName($culture){}
	private function GetTimeFormatsCore($shortFormat){}
	private static function GetAnsiCodePage($cultureName){}
	private static function GetOemCodePage($cultureName){}
	private static function GetMacCodePage($cultureName){}
	private static function GetEbcdicCodePage($cultureName){}
	/**
	 * @return \System\Globalization\CultureData
	 */
	protected static function GetCurrentRegionData(){}
	/**
	 */
	public function __construct(){}
}