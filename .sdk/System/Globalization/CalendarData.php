<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CalendarDataOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\String &$calendarData
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function EnumCalendarInfo_1 ($localeName, $calendarId, $dataType, &$calendarData){}
	/**
	 * @deprecated
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $dataType
	 * @param \System\Globalization\CalendarData+IcuEnumCalendarsData& $callbackContext
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function EnumCalendarInfo_2 ($localeName, $calendarId, $dataType, $callbackContext){}
}
final class CalendarData extends \System\Object
{
	use CalendarDataOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $sNativeName;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saShortDates;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saYearMonths;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saLongDates;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $sMonthDay;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saEraNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saAbbrevEraNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saAbbrevEnglishEraNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saDayNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saAbbrevDayNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saSuperShortDayNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saMonthNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saAbbrevMonthNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saMonthGenitiveNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saAbbrevMonthGenitiveNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $saLeapYearMonthNames;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $iTwoDigitYearMax;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $bUseUserOverrides;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\CalendarData
	 */
	protected static $Invariant;
	private static function CreateInvariant(){}
	private function InitializeEraNames($localeName, $calendarId){}
	private function InitializeAbbreviatedEraNames($localeName, $calendarId){}
	/**
	 * @param \System\Globalization\Calendar $calendar
	 * @return \System\Int32|int
	 */
	protected static function GetCalendarCurrentEra($calendar){}
	private static function CalendarIdToCultureName($calendarId){}
	private function IcuLoadCalendarDataFromSystem($localeName, $calendarId){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendars
	 * @return \System\Int32|int
	 */
	protected static function IcuGetCalendars($localeName, $calendars){}
	private static function GetCalendarInfo($localeName, $calendarId, $dataType, &$calendarString){}
	private static function EnumDatePatterns($localeName, $calendarId, $dataType, &$datePatterns){}
	private static function FixDefaultShortDatePattern($shortDatePatterns){}
	private static function NormalizeDatePattern($input){}
	private static function NormalizeDayOfWeek($input, $destination, $index){}
	private static function CountOccurrences($input, $value, $index){}
	private static function EnumMonthNames($localeName, $calendarId, $dataType, &$monthNames, $leapHebrewMonthName){}
	private static function EnumEraNames($localeName, $calendarId, $dataType, &$eraNames){}
	/**
	 * @uses CalendarDataOverride::EnumCalendarInfo_1 <br>protected , args: ($localeName, $calendarId, $dataType, &$calendarData)<br>
	 * @uses CalendarDataOverride::EnumCalendarInfo_2 <br>private , args: ($localeName, $calendarId, $dataType, $callbackContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function EnumCalendarInfo (\override ...$args){}
	private static function EnumCalendarInfoCallback($calendarStringPtr, $context){}
	private function LoadCalendarDataFromSystemCore($localeName, $calendarId){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Boolean|bool $useUserOverride
	 * @param \System\Globalization\CalendarId $calendars
	 * @return \System\Int32|int
	 */
	protected static function GetCalendarsCore($localeName, $useUserOverride, $calendars){}
}