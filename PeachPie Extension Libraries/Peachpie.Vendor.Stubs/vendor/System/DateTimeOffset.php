<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeOffsetOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $other
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($other){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function Parse_1 ($input){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function Parse_2 ($input, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function Parse_3 ($input, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function Parse_4 ($input, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ParseExact_1 ($input, $format, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ParseExact_2 ($input, $format, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ParseExact_3 ($input, $format, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ParseExact_4 ($input, $formats, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ParseExact_5 ($input, $formats, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $value
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function Subtract_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $value
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public function Subtract_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public function ToLocalTime_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $throwOnOverflow
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]protected function ToLocalTime_2 ($throwOnOverflow){}
	/**
	 * @deprecated
	 * @param \System\DateTime $utcDateTime
	 * @param \System\Boolean|bool $throwOnOverflow
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]private static function ToLocalTime_3 ($utcDateTime, $throwOnOverflow){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($input, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($input, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($input, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($input, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($input, $format, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($input, $format, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_3 ($input, $formats, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeOffset& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_4 ($input, $formats, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($dateTimeOffset, $timeSpan){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function op_Subtraction_2 ($left, $right){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_1 ($ticks, $offset){}
	/**
	 * @param \System\DateTime $dateTime
	 */
	#[MethodOverride]public function __construct_2 ($dateTime){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_3 ($dateTime, $offset){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_4 ($year, $month, $day, $hour, $minute, $second, $offset){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_5 ($year, $month, $day, $hour, $minute, $second, $millisecond, $offset){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Globalization\Calendar $calendar
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_6 ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar, $offset){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_7 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $offset){}
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
	 * @param \System\TimeSpan $offset
	 */
	#[MethodOverride]public function __construct_8 ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar, $offset){}
}
final class DateTimeOffset extends \System\ValueType implements
	\System\IComparable,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use DateTimeOffsetOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTimeOffset
	 */
	public static $MinValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTimeOffset
	 */
	public static $MaxValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\DateTimeOffset
	 */
	public static $UnixEpoch;
	/**
	 * @property
	 * @var \System\DateTimeOffset
	 * @since readonly
	 */
	public $UtcNow;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $DateTime;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $UtcDateTime;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $LocalDateTime;
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
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $Offset;
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
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $UtcTicks;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $TimeOfDay;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Year;
	/**
	 * @property
	 * @var \System\DateTimeOffset
	 * @since readonly
	 */
	public $Now;
	/**
	 * @param \System\TimeSpan $offset
	 * @return \System\DateTimeOffset
	 */
	public function ToOffset($offset){}
	/**
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\DateTimeOffset
	 */
	public function Add($timeSpan){}
	/**
	 * @param \System\Double|double $days
	 * @return \System\DateTimeOffset
	 */
	public function AddDays($days){}
	/**
	 * @param \System\Double|double $hours
	 * @return \System\DateTimeOffset
	 */
	public function AddHours($hours){}
	/**
	 * @param \System\Double|double $milliseconds
	 * @return \System\DateTimeOffset
	 */
	public function AddMilliseconds($milliseconds){}
	/**
	 * @param \System\Double|double $microseconds
	 * @return \System\DateTimeOffset
	 */
	public function AddMicroseconds($microseconds){}
	/**
	 * @param \System\Double|double $minutes
	 * @return \System\DateTimeOffset
	 */
	public function AddMinutes($minutes){}
	/**
	 * @param \System\Int32|int $months
	 * @return \System\DateTimeOffset
	 */
	public function AddMonths($months){}
	/**
	 * @param \System\Double|double $seconds
	 * @return \System\DateTimeOffset
	 */
	public function AddSeconds($seconds){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\DateTimeOffset
	 */
	public function AddTicks($ticks){}
	/**
	 * @param \System\Int32|int $years
	 * @return \System\DateTimeOffset
	 */
	public function AddYears($years){}
	/**
	 * @param \System\DateTimeOffset $first
	 * @param \System\DateTimeOffset $second
	 * @return \System\Int32|int
	 */
	public static function Compare($first, $second){}
	/**
	 * @uses DateTimeOffsetOverride::CompareTo_1 <br>private , args: ($obj)<br>
	 * @uses DateTimeOffsetOverride::CompareTo_2 <br>public , args: ($other)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\DateTimeOffset $other
	 * @return \System\Boolean|bool
	 */
	public function EqualsExact($other){}
	/**
	 * @param \System\Int64|int $fileTime
	 * @return \System\DateTimeOffset
	 */
	public static function FromFileTime($fileTime){}
	/**
	 * @param \System\Int64|int $seconds
	 * @return \System\DateTimeOffset
	 */
	public static function FromUnixTimeSeconds($seconds){}
	/**
	 * @param \System\Int64|int $milliseconds
	 * @return \System\DateTimeOffset
	 */
	public static function FromUnixTimeMilliseconds($milliseconds){}
	private function OnDeserialization($sender){}
	private function GetObjectData($info, $context){}
	/**
	 * @uses DateTimeOffsetOverride::Parse_1 <br>public , args: ($input)<br>
	 * @uses DateTimeOffsetOverride::Parse_2 <br>public , args: ($input, $formatProvider)<br>
	 * @uses DateTimeOffsetOverride::Parse_3 <br>public , args: ($input, $formatProvider, $styles)<br>
	 * @uses DateTimeOffsetOverride::Parse_4 <br>public , args: ($input, $formatProvider, $styles)<br>
	 * @uses DateTimeOffsetOverride::Parse_5 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses DateTimeOffsetOverride::ParseExact_1 <br>public , args: ($input, $format, $formatProvider)<br>
	 * @uses DateTimeOffsetOverride::ParseExact_2 <br>public , args: ($input, $format, $formatProvider, $styles)<br>
	 * @uses DateTimeOffsetOverride::ParseExact_3 <br>public , args: ($input, $format, $formatProvider, $styles)<br>
	 * @uses DateTimeOffsetOverride::ParseExact_4 <br>public , args: ($input, $formats, $formatProvider, $styles)<br>
	 * @uses DateTimeOffsetOverride::ParseExact_5 <br>public , args: ($input, $formats, $formatProvider, $styles)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses DateTimeOffsetOverride::Subtract_1 <br>public , args: ($value)<br>
	 * @uses DateTimeOffsetOverride::Subtract_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|\System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function Subtract (\override ...$args){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToFileTime(){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToUnixTimeSeconds(){}
	/**
	 * @return \System\Int64|int
	 */
	public function ToUnixTimeMilliseconds(){}
	/**
	 * @uses DateTimeOffsetOverride::ToLocalTime_1 <br>public , args: ()<br>
	 * @uses DateTimeOffsetOverride::ToLocalTime_2 <br>protected , args: ($throwOnOverflow)<br>
	 * @uses DateTimeOffsetOverride::ToLocalTime_3 <br>private , args: ($utcDateTime, $throwOnOverflow)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|mixed|\override
	 */
	#[MethodOverridePublic]function ToLocalTime (\override ...$args){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $formatProvider){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public function ToUniversalTime(){}
	/**
	 * @uses DateTimeOffsetOverride::TryParse_1 <br>public , args: ($input, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParse_2 <br>public , args: ($input, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParse_3 <br>public , args: ($input, $formatProvider, $styles, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParse_4 <br>public , args: ($input, $formatProvider, $styles, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses DateTimeOffsetOverride::TryParseExact_1 <br>public , args: ($input, $format, $formatProvider, $styles, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParseExact_2 <br>public , args: ($input, $format, $formatProvider, $styles, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParseExact_3 <br>public , args: ($input, $formats, $formatProvider, $styles, &$result)<br>
	 * @uses DateTimeOffsetOverride::TryParseExact_4 <br>public , args: ($input, $formats, $formatProvider, $styles, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	private static function ValidateOffset($offset){}
	private static function ValidateDate($dateTime, $offset){}
	private static function ValidateStyles($style, $parameterName){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\DateTimeOffset
	 */
	public static function op_Implicit($dateTime){}
	/**
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\DateTimeOffset
	 */
	public static function op_Addition($dateTimeOffset, $timeSpan){}
	/**
	 * @uses DateTimeOffsetOverride::op_Subtraction_1 <br>public , args: ($dateTimeOffset, $timeSpan)<br>
	 * @uses DateTimeOffsetOverride::op_Subtraction_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|\System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @uses DateTimeOffsetOverride::__construct_1 <br>public , args: ($ticks, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_2 <br>public , args: ($dateTime)<br>
	 * @uses DateTimeOffsetOverride::__construct_3 <br>public , args: ($dateTime, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_4 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_5 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_6 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $calendar, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_7 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $offset)<br>
	 * @uses DateTimeOffsetOverride::__construct_8 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $microsecond, $calendar, $offset)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}