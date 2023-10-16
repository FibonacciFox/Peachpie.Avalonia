<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeOffsetMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_3($first, $second){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function Parse_1($input){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function Parse_2($input, $formatProvider){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function Parse_3($input, $formatProvider, $styles){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function Parse_4($input, $formatProvider, $styles){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ParseExact_1($input, $format, $formatProvider){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ParseExact_2($input, $format, $formatProvider, $styles){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ParseExact_3($input, $format, $formatProvider, $styles){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ParseExact_4($input, $formats, $formatProvider, $styles){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ParseExact_5($input, $formats, $formatProvider, $styles){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public  function Subtract_1($value){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public  function Subtract_2($value){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public  function ToLocalTime_1(){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] protected  function ToLocalTime_2($throwOnOverflow){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] private static function ToLocalTime_3($utcDateTime, $throwOnOverflow){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($formatProvider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_4($format, $formatProvider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($input, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($input, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($input, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($input, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_5($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_6($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_1($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_2($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_3($input, $formats, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_4($input, $formats, $formatProvider, $styles, $result){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function op_Subtraction_1($dateTimeOffset, $timeSpan){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function op_Subtraction_2($left, $right){}
}
/**
 */
class DateTimeOffset extends \System\ValueType implements 
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
	/**
	 * @var \System\DateTimeOffset
	 * @field
	 */
	public readonly $MinValue;
	/**
	 * @var \System\DateTimeOffset
	 * @field
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\DateTimeOffset
	 * @field
	 */
	public readonly $UnixEpoch;
	/**
	 * @var \System\DateTimeOffset
	 * @property
	 */
	public readonly $UtcNow;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $DateTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $UtcDateTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $LocalDateTime;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $Date;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Day;
	/**
	 * @var \System\DayOfWeek
	 * @property
	 */
	public readonly $DayOfWeek;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $DayOfYear;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Hour;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Millisecond;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Microsecond;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Nanosecond;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Minute;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Month;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Second;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Ticks;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $UtcTicks;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $TimeOfDay;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Year;
	/**
	 * @var \System\DateTimeOffset
	 * @property
	 */
	public readonly $Now;
	/**
	 * @return \System\DateTimeOffset
	 */
	public static function get_UtcNow(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_DateTime(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_UtcDateTime(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_LocalDateTime(){}
	/**
	 * @param \System\TimeSpan $offset
	 * @return \System\DateTimeOffset
	 */
	public  function ToOffset($offset){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ClockDateTime(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_Date(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Day(){}
	/**
	 * @return \System\DayOfWeek
	 */
	public  function get_DayOfWeek(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_DayOfYear(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Hour(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Millisecond(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Microsecond(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Nanosecond(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Minute(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Month(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Offset(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Second(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Ticks(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_UtcTicks(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_TimeOfDay(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Year(){}
	/**
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\DateTimeOffset
	 */
	public  function Add($timeSpan){}
	/**
	 * @param \System\Double|double $days
	 * @return \System\DateTimeOffset
	 */
	public  function AddDays($days){}
	/**
	 * @param \System\Double|double $hours
	 * @return \System\DateTimeOffset
	 */
	public  function AddHours($hours){}
	/**
	 * @param \System\Double|double $milliseconds
	 * @return \System\DateTimeOffset
	 */
	public  function AddMilliseconds($milliseconds){}
	/**
	 * @param \System\Double|double $microseconds
	 * @return \System\DateTimeOffset
	 */
	public  function AddMicroseconds($microseconds){}
	/**
	 * @param \System\Double|double $minutes
	 * @return \System\DateTimeOffset
	 */
	public  function AddMinutes($minutes){}
	/**
	 * @param \System\Int32|int $months
	 * @return \System\DateTimeOffset
	 */
	public  function AddMonths($months){}
	/**
	 * @param \System\Double|double $seconds
	 * @return \System\DateTimeOffset
	 */
	public  function AddSeconds($seconds){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\DateTimeOffset
	 */
	public  function AddTicks($ticks){}
	/**
	 * @param \System\Int32|int $years
	 * @return \System\DateTimeOffset
	 */
	public  function AddYears($years){}
	/**
	 * @param \System\DateTimeOffset $first
	 * @param \System\DateTimeOffset $second
	 * @return \System\Int32|int
	 */
	public static function Compare($first, $second){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::CompareTo_1 ($obj)
	 * @uses DateTimeOffsetMethodsOverride::CompareTo_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::Equals_1 ($obj)
	 * @uses DateTimeOffsetMethodsOverride::Equals_2 ($other)
	 * @uses DateTimeOffsetMethodsOverride::Equals_3 ($first, $second)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
	/**
	 * @param \System\DateTimeOffset $other
	 * @return \System\Boolean
	 */
	public  function EqualsExact($other){}
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
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::Parse_1 ($input)
	 * @uses DateTimeOffsetMethodsOverride::Parse_2 ($input, $formatProvider)
	 * @uses DateTimeOffsetMethodsOverride::Parse_3 ($input, $formatProvider, $styles)
	 * @uses DateTimeOffsetMethodsOverride::Parse_4 ($input, $formatProvider, $styles)
	 * @uses DateTimeOffsetMethodsOverride::Parse_5 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::ParseExact_1 ($input, $format, $formatProvider)
	 * @uses DateTimeOffsetMethodsOverride::ParseExact_2 ($input, $format, $formatProvider, $styles)
	 * @uses DateTimeOffsetMethodsOverride::ParseExact_3 ($input, $format, $formatProvider, $styles)
	 * @uses DateTimeOffsetMethodsOverride::ParseExact_4 ($input, $formats, $formatProvider, $styles)
	 * @uses DateTimeOffsetMethodsOverride::ParseExact_5 ($input, $formats, $formatProvider, $styles)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::Subtract_1 ($value)
	 * @uses DateTimeOffsetMethodsOverride::Subtract_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subtract(mixed ...$args){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToFileTime(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToUnixTimeSeconds(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToUnixTimeMilliseconds(){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::ToLocalTime_1 ()
	 * @uses DateTimeOffsetMethodsOverride::ToLocalTime_2 ($throwOnOverflow)
	 * @uses DateTimeOffsetMethodsOverride::ToLocalTime_3 ($utcDateTime, $throwOnOverflow)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLocalTime(mixed ...$args){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::ToString_1 ()
	 * @uses DateTimeOffsetMethodsOverride::ToString_2 ($format)
	 * @uses DateTimeOffsetMethodsOverride::ToString_3 ($formatProvider)
	 * @uses DateTimeOffsetMethodsOverride::ToString_4 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Boolean
	 */
	public  function TryFormat($destination, $charsWritten, $format, $formatProvider){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public  function ToUniversalTime(){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::TryParse_1 ($input, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParse_2 ($input, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParse_3 ($input, $formatProvider, $styles, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParse_4 ($input, $formatProvider, $styles, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @uses DateTimeOffsetMethodsOverride::TryParseExact_1 ($input, $format, $formatProvider, $styles, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParseExact_2 ($input, $format, $formatProvider, $styles, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParseExact_3 ($input, $formats, $formatProvider, $styles, $result)
	 * @uses DateTimeOffsetMethodsOverride::TryParseExact_4 ($input, $formats, $formatProvider, $styles, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @param \System\TimeSpan $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateOffset($offset){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateDate($dateTime, $offset){}
	/**
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\String|string $parameterName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateStyles($style, $parameterName){}
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
	 * @uses DateTimeOffsetMethodsOverride::op_Subtraction_1 ($dateTimeOffset, $timeSpan)
	 * @uses DateTimeOffsetMethodsOverride::op_Subtraction_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\DateTimeOffset $left
	 * @param \System\DateTimeOffset $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @return \System\DateTimeOffset
	 */
	public static function get_Now(){}
}
