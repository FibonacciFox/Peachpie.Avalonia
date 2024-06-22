<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeFormatInfoOverride {
	/**
	 * @deprecated
	 * @return \System\String
	 */
	#[MethodOverride]public function GetAllDateTimePatterns_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $format
	 * @return \System\String
	 */
	#[MethodOverride]public function GetAllDateTimePatterns_2 ($format){}
}
final class DateTimeFormatInfo extends \System\Object implements
	\System\IFormatProvider,
	\System\ICloneable
{
	use DateTimeFormatInfoOverride;

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_isReadOnly;
	/**
	 * @property
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @since readonly
	 */
	public $InvariantInfo;
	/**
	 * @property
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @since readonly
	 */
	public $CurrentInfo;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $AMDesignator;
	/**
	 * @property
	 * @var \System\Globalization\Calendar
	 */
	public $Calendar;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DateSeparator;
	/**
	 * @property
	 * @var \System\DayOfWeek
	 */
	public $FirstDayOfWeek;
	/**
	 * @property
	 * @var \System\Globalization\CalendarWeekRule
	 */
	public $CalendarWeekRule;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $FullDateTimePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $LongDatePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $LongTimePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $MonthDayPattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PMDesignator;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $RFC1123Pattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ShortDatePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ShortTimePattern;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $SortableDateTimePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $TimeSeparator;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $UniversalSortableDateTimePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $YearMonthPattern;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $AbbreviatedDayNames;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $ShortestDayNames;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $DayNames;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $AbbreviatedMonthNames;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $MonthNames;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $NativeCalendarName;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $AbbreviatedMonthGenitiveNames;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $MonthGenitiveNames;
	private function InternalGetAbbreviatedDayOfWeekNames(){}
	private function InternalGetAbbreviatedDayOfWeekNamesCore(){}
	private function InternalGetSuperShortDayNames(){}
	private function InternalGetSuperShortDayNamesCore(){}
	private function InternalGetDayOfWeekNames(){}
	private function InternalGetDayOfWeekNamesCore(){}
	private function InternalGetAbbreviatedMonthNames(){}
	private function InternalGetAbbreviatedMonthNamesCore(){}
	private function InternalGetMonthNames(){}
	private function internalGetMonthNamesCore(){}
	private function InitializeOverridableProperties($cultureData, $calendarId){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function GetInstance($provider){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public function GetFormat($formatType){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\String|string $eraName
	 * @return \System\Int32|int
	 */
	public function GetEra($eraName){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\String|string
	 */
	public function GetEraName($era){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\String|string
	 */
	public function GetAbbreviatedEraName($era){}
	private function OnLongDatePatternChanged(){}
	private function OnLongTimePatternChanged(){}
	private function OnShortDatePatternChanged(){}
	private function OnShortTimePatternChanged(){}
	private function OnYearMonthPatternChanged(){}
	private static function CheckNullValue($values, $length){}
	/**
	 * @param \System\Int32|int $month
	 * @param \System\Globalization\MonthNameStyles $style
	 * @param \System\Boolean|bool $abbreviated
	 * @return \System\String|string
	 */
	protected function InternalGetMonthName($month, $style, $abbreviated){}
	private function InternalGetGenitiveMonthNames($abbreviated){}
	/**
	 * @return \System\String[]|array
	 */
	protected function InternalGetLeapYearMonthNames(){}
	/**
	 * @param \System\DayOfWeek $dayofweek
	 * @return \System\String|string
	 */
	public function GetAbbreviatedDayName($dayofweek){}
	/**
	 * @param \System\DayOfWeek $dayOfWeek
	 * @return \System\String|string
	 */
	public function GetShortestDayName($dayOfWeek){}
	private static function GetCombinedPatterns($patterns1, $patterns2, $connectString){}
	/**
	 * @uses DateTimeFormatInfoOverride::GetAllDateTimePatterns_1 <br>public , args: ()<br>
	 * @uses DateTimeFormatInfoOverride::GetAllDateTimePatterns_2 <br>public , args: ($format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetAllDateTimePatterns (\override ...$args){}
	/**
	 * @param \System\DayOfWeek $dayofweek
	 * @return \System\String|string
	 */
	public function GetDayName($dayofweek){}
	/**
	 * @param \System\Int32|int $month
	 * @return \System\String|string
	 */
	public function GetAbbreviatedMonthName($month){}
	/**
	 * @param \System\Int32|int $month
	 * @return \System\String|string
	 */
	public function GetMonthName($month){}
	private static function GetMergedPatterns($patterns, $defaultPattern){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function ReadOnly($dtfi){}
	/**
	 * @param \System\String $patterns
	 * @param \System\Char $format
	 * @return \System\Void|void
	 */
	public function SetAllDateTimePatterns($patterns, $format){}
	/**
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\Boolean|bool $styles
	 * @return \System\Void|void
	 */
	protected static function ValidateStyles($style, $styles){}
	private function InitializeFormatFlags(){}
	/**
	 * @param \System\Int32& $year
	 * @param \System\Int32& $month
	 * @param \System\Boolean|bool $parsedMonthName
	 * @return \System\Boolean|bool
	 */
	protected function YearMonthAdjustment($year, $month, $parsedMonthName){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	protected static function GetJapaneseCalendarDTFI(){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	protected static function GetTaiwanCalendarDTFI(){}
	private function ClearTokenHashTable(){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo+TokenHashValue[]
	 */
	protected function CreateTokenHashTable(){}
	private function AddMonthNames($temp, $monthPostfix){}
	private static function TryParseHebrewNumber($str, &$badFormat, &$number){}
	private static function IsHebrewChar($ch){}
	private function IsAllowedJapaneseTokenFollowedByNonSpaceLetter($tokenString, $nextCh){}
	/**
	 * @param \System\TokenType $TokenMask
	 * @param \System\TokenType& &$tokenType
	 * @param \System\Int32& &$tokenValue
	 * @param \System\__DTString& $str
	 * @return \System\Boolean|bool
	 */
	protected function Tokenize($TokenMask, &$tokenType, &$tokenValue, $str){}
	private function InsertAtCurrentHashNode($hashTable, $str, $ch, $tokenType, $tokenValue, $pos, $hashcode, $hashProbe){}
	private function InsertHash($hashTable, $str, $tokenType, $tokenValue){}
	private function CompareStringIgnoreCaseOptimized($string1, $offset1, $length1, $string2, $offset2, $length2){}
	/**
	 */
	public function __construct(){}
}