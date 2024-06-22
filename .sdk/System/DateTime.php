<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\DateTime $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @return \System\UInt64
	 */
	#[MethodOverride]private static function TimeToTicks_1 ($hour, $minute, $second){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @return \System\UInt64
	 */
	#[MethodOverride]protected static function TimeToTicks_2 ($hour, $minute, $second, $millisecond){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 * @return \System\UInt64
	 */
	#[MethodOverride]protected static function TimeToTicks_3 ($hour, $minute, $second, $millisecond, $microsecond){}
	/**
	 * @deprecated
	 * @param \System\Int32& &$hour
	 * @param \System\Int32& &$minute
	 * @param \System\Int32& &$second
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function GetTime_1 (&$hour, &$minute, &$second){}
	/**
	 * @deprecated
	 * @param \System\Int32& &$hour
	 * @param \System\Int32& &$minute
	 * @param \System\Int32& &$second
	 * @param \System\Int32& &$millisecond
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function GetTime_2 (&$hour, &$minute, &$second, &$millisecond){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function Parse_2 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function Parse_4 ($s, $provider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ParseExact_1 ($s, $format, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ParseExact_2 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ParseExact_3 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ParseExact_4 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ParseExact_5 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\DateTime $value
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function Subtract_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $value
	 * @return \System\DateTime
	 */
	#[MethodOverride]public function Subtract_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $provider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $provider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_3 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_4 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\DateTime $d
	 * @param \System\TimeSpan $t
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($d, $t){}
	/**
	 * @deprecated
	 * @param \System\DateTime $d1
	 * @param \System\DateTime $d2
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function op_Subtraction_2 ($d1, $d2){}
	/**
	 * @deprecated
	 * @return \System\String
	 */
	#[MethodOverride]public function GetDateTimeFormats_1 (){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\String
	 */
	#[MethodOverride]public function GetDateTimeFormats_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Char $format
	 * @return \System\String
	 */
	#[MethodOverride]public function GetDateTimeFormats_3 ($format){}
	/**
	 * @deprecated
	 * @param \System\Char $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String
	 */
	#[MethodOverride]public function GetDateTimeFormats_4 ($format, $provider){}
	/**
	 * @param \System\Int64|int $ticks
	 */
	#[MethodOverride]public function __construct_1 ($ticks){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_2 ($ticks, $kind){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 */
	#[MethodOverride]public function __construct_3 ($year, $month, $day){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Globalization\Calendar $calendar
	 */
	#[MethodOverride]public function __construct_4 ($year, $month, $day, $calendar){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Globalization\Calendar $calendar
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_5 ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar, $kind){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 */
	#[MethodOverride]public function __construct_6 ($year, $month, $day, $hour, $minute, $second){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_7 ($year, $month, $day, $hour, $minute, $second, $kind){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Globalization\Calendar $calendar
	 */
	#[MethodOverride]public function __construct_8 ($year, $month, $day, $hour, $minute, $second, $calendar){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 */
	#[MethodOverride]public function __construct_9 ($year, $month, $day, $hour, $minute, $second, $millisecond){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_10 ($year, $month, $day, $hour, $minute, $second, $millisecond, $kind){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Globalization\Calendar $calendar
	 */
	#[MethodOverride]public function __construct_11 ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 */
	#[MethodOverride]public function __construct_12 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_13 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $kind){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 * @param \System\Globalization\Calendar $calendar
	 */
	#[MethodOverride]public function __construct_14 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 * @param \System\Globalization\Calendar $calendar
	 * @param \System\DateTimeKind $kind
	 */
	#[MethodOverride]public function __construct_15 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar, $kind){}
}
final class DateTime extends \System\ValueType implements
	\System\IComparable,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IConvertible,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use DateTimeOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTime
	 */
	public static $MinValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTime
	 */
	public static $MaxValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTime
	 */
	public static $UnixEpoch;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $Date;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Day;
	/**
	 * @property
	 * @var \System\DayOfWeek
	 * @since readonly
	 */
	public $DayOfWeek;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $DayOfYear;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Hour;
	/**
	 * @property
	 * @var \System\DateTimeKind
	 * @since readonly
	 */
	public $Kind;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Millisecond;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Microsecond;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Nanosecond;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Minute;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Month;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $Now;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Second;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Ticks;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $TimeOfDay;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $Today;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Year;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $UtcNow;
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\DateTime
	 */
	protected static function UnsafeCreate($ticks){}
	private static function ThrowTicksOutOfRange(){}
	private static function ThrowInvalidKind(){}
	private static function ThrowMillisecondOutOfRange(){}
	private static function ThrowMicrosecondOutOfRange(){}
	private static function ThrowDateArithmetic($param){}
	private static function ThrowAddOutOfRange(){}
	private static function Init($year, $month, $day, $hour, $minute, $second, $millisecond, $kind){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\DateTime
	 */
	public function Add($value){}
	private function AddUnits($value, $maxUnitCount, $ticksPerUnit){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddDays($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddHours($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddMilliseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddMicroseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddMinutes($value){}
	/**
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	public function AddMonths($months){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public function AddSeconds($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\DateTime
	 */
	public function AddTicks($value){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	protected function TryAddTicks($value, &$result){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateTime
	 */
	public function AddYears($value){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Int32|int
	 */
	public static function Compare($t1, $t2){}
	/**
	 * @uses DateTimeOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses DateTimeOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	private static function DateToTicks($year, $month, $day){}
	private static function DaysToYear($year){}
	/**
	 * @uses DateTimeOverride::TimeToTicks_1 <br>private , args: ($hour, $minute, $second)<br>
	 * @uses DateTimeOverride::TimeToTicks_2 <br>protected , args: ($hour, $minute, $second, $millisecond)<br>
	 * @uses DateTimeOverride::TimeToTicks_3 <br>protected , args: ($hour, $minute, $second, $millisecond, $microsecond)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt64|mixed|\override
	 */
	#[MethodOverrideProtected]function TimeToTicks (\override ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @return \System\Int32|int
	 */
	public static function DaysInMonth($year, $month){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Int64|int
	 */
	protected static function DoubleDateToTicks($value){}
	/**
	 * @param \System\Int64|int $dateData
	 * @return \System\DateTime
	 */
	public static function FromBinary($dateData){}
	/**
	 * @param \System\Int64|int $fileTime
	 * @return \System\DateTime
	 */
	public static function FromFileTime($fileTime){}
	/**
	 * @param \System\Int64|int $fileTime
	 * @return \System\DateTime
	 */
	public static function FromFileTimeUtc($fileTime){}
	/**
	 * @param \System\Double|double $d
	 * @return \System\DateTime
	 */
	public static function FromOADate($d){}
	private function GetObjectData($info, $context){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsDaylightSavingTime(){}
	/**
	 * @param \System\DateTime $value
	 * @param \System\DateTimeKind $kind
	 * @return \System\DateTime
	 */
	public static function SpecifyKind($value, $kind){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToBinary(){}
	/**
	 * @param \System\Int32& &$year
	 * @param \System\Int32& &$month
	 * @param \System\Int32& &$day
	 * @return \System\Void|void
	 */
	protected function GetDate(&$year, &$month, &$day){}
	/**
	 * @uses DateTimeOverride::GetTime_1 <br>protected , args: (&$hour, &$minute, &$second)<br>
	 * @uses DateTimeOverride::GetTime_2 <br>protected , args: (&$hour, &$minute, &$second, &$millisecond)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTime (\override ...$args){}
	/**
	 * @param \System\Int32& &$hour
	 * @param \System\Int32& &$minute
	 * @param \System\Int32& &$second
	 * @param \System\Int32& &$tick
	 * @return \System\Void|void
	 */
	protected function GetTimePrecise(&$hour, &$minute, &$second, &$tick){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsAmbiguousDaylightSavingTime(){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Boolean|bool
	 */
	public static function IsLeapYear($year){}
	/**
	 * @uses DateTimeOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses DateTimeOverride::Parse_2 <br>public , args: ($s, $provider)<br>
	 * @uses DateTimeOverride::Parse_3 <br>public , args: ($s, $provider, $styles)<br>
	 * @uses DateTimeOverride::Parse_4 <br>public , args: ($s, $provider, $styles)<br>
	 * @uses DateTimeOverride::Parse_5 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses DateTimeOverride::ParseExact_1 <br>public , args: ($s, $format, $provider)<br>
	 * @uses DateTimeOverride::ParseExact_2 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses DateTimeOverride::ParseExact_3 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses DateTimeOverride::ParseExact_4 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @uses DateTimeOverride::ParseExact_5 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses DateTimeOverride::Subtract_1 <br>public , args: ($value)<br>
	 * @uses DateTimeOverride::Subtract_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|\System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function Subtract (\override ...$args){}
	private static function TicksToOADate($value){}
	/**
	 * @return \System\Double|double
	 */
	public function ToOADate(){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToFileTime(){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToFileTimeUtc(){}
	/**
	 * @return \System\DateTime
	 */
	public function ToLocalTime(){}
	/**
	 * @return \System\String|string
	 */
	public function ToLongDateString(){}
	/**
	 * @return \System\String|string
	 */
	public function ToLongTimeString(){}
	/**
	 * @return \System\String|string
	 */
	public function ToShortDateString(){}
	/**
	 * @return \System\String|string
	 */
	public function ToShortTimeString(){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @return \System\DateTime
	 */
	public function ToUniversalTime(){}
	/**
	 * @uses DateTimeOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses DateTimeOverride::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses DateTimeOverride::TryParse_3 <br>public , args: ($s, $provider, $styles, &$result)<br>
	 * @uses DateTimeOverride::TryParse_4 <br>public , args: ($s, $provider, $styles, &$result)<br>
	 * @uses DateTimeOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses DateTimeOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses DateTimeOverride::TryParseExact_1 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses DateTimeOverride::TryParseExact_2 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses DateTimeOverride::TryParseExact_3 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @uses DateTimeOverride::TryParseExact_4 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	/**
	 * @param \System\DateTime $d
	 * @param \System\TimeSpan $t
	 * @return \System\DateTime
	 */
	public static function op_Addition($d, $t){}
	/**
	 * @uses DateTimeOverride::op_Subtraction_1 <br>public , args: ($d, $t)<br>
	 * @uses DateTimeOverride::op_Subtraction_2 <br>public , args: ($d1, $d2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|\System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @param \System\DateTime $d1
	 * @param \System\DateTime $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\DateTime $d1
	 * @param \System\DateTime $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($d1, $d2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($t1, $t2){}
	/**
	 * @uses DateTimeOverride::GetDateTimeFormats_1 <br>public , args: ()<br>
	 * @uses DateTimeOverride::GetDateTimeFormats_2 <br>public , args: ($provider)<br>
	 * @uses DateTimeOverride::GetDateTimeFormats_3 <br>public , args: ($format)<br>
	 * @uses DateTimeOverride::GetDateTimeFormats_4 <br>public , args: ($format, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetDateTimeFormats (\override ...$args){}
	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode(){}
	private function ToBoolean($provider){}
	private function ToChar($provider){}
	private function ToSByte($provider){}
	private function ToByte($provider){}
	private function ToInt16($provider){}
	private function ToUInt16($provider){}
	private function ToInt32($provider){}
	private function ToUInt32($provider){}
	private function ToInt64($provider){}
	private function ToUInt64($provider){}
	private function ToSingle($provider){}
	private function ToDouble($provider){}
	private function ToDecimal($provider){}
	private static function InvalidCast($to){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryCreate($year, $month, $day, $hour, $minute, $second, $millisecond, &$result){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\DateTimeKind $kind
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidTimeWithLeapSeconds($year, $month, $day, $hour, $minute, $kind){}
	/**
	 * @uses DateTimeOverride::__construct_1 <br>public , args: ($ticks)<br>
	 * @uses DateTimeOverride::__construct_2 <br>public , args: ($ticks, $kind)<br>
	 * @uses DateTimeOverride::__construct_3 <br>public , args: ($year, $month, $day)<br>
	 * @uses DateTimeOverride::__construct_4 <br>public , args: ($year, $month, $day, $calendar)<br>
	 * @uses DateTimeOverride::__construct_5 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar, $kind)<br>
	 * @uses DateTimeOverride::__construct_6 <br>public , args: ($year, $month, $day, $hour, $minute, $second)<br>
	 * @uses DateTimeOverride::__construct_7 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $kind)<br>
	 * @uses DateTimeOverride::__construct_8 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $calendar)<br>
	 * @uses DateTimeOverride::__construct_9 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond)<br>
	 * @uses DateTimeOverride::__construct_10 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $kind)<br>
	 * @uses DateTimeOverride::__construct_11 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar)<br>
	 * @uses DateTimeOverride::__construct_12 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond)<br>
	 * @uses DateTimeOverride::__construct_13 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $kind)<br>
	 * @uses DateTimeOverride::__construct_14 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar)<br>
	 * @uses DateTimeOverride::__construct_15 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar, $kind)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}