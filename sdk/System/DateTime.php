<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private static function TimeToTicks_1($hour, $minute, $second){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] protected static function TimeToTicks_2($hour, $minute, $second, $millisecond){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] protected static function TimeToTicks_3($hour, $minute, $second, $millisecond, $microsecond){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_3($t1, $t2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetTime_1($hour, $minute, $second){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetTime_2($hour, $minute, $second, $millisecond){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function Parse_2($s, $provider){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function Parse_3($s, $provider, $styles){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function Parse_4($s, $provider, $styles){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ParseExact_1($s, $format, $provider){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ParseExact_2($s, $format, $provider, $style){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ParseExact_3($s, $format, $provider, $style){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ParseExact_4($s, $formats, $provider, $style){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ParseExact_5($s, $formats, $provider, $style){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public  function Subtract_1($value){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function Subtract_2($value){}
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
	#[MethodOverride] public  function ToString_3($provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_4($format, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($s, $provider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($s, $provider, $styles, $result){}
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
	#[MethodOverride] public static function TryParseExact_1($s, $format, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_2($s, $format, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_3($s, $formats, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_4($s, $formats, $provider, $style, $result){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function op_Subtraction_1($d, $t){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function op_Subtraction_2($d1, $d2){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetDateTimeFormats_1(){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetDateTimeFormats_2($provider){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetDateTimeFormats_3($format){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function GetDateTimeFormats_4($format, $provider){}
}
/**
 */
class DateTime extends \System\ValueType implements 
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
	/**
	 * @var \System\DateTime
	 * @field
	 */
	public readonly $MinValue;
	/**
	 * @var \System\DateTime
	 * @field
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\DateTime
	 * @field
	 */
	public readonly $UnixEpoch;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $s_systemSupportsLeapSeconds;
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
	 * @var \System\DateTimeKind
	 * @property
	 */
	public readonly $Kind;
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
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $Now;
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
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $TimeOfDay;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $Today;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Year;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $UtcNow;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DaysInMonth365(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DaysInMonth366(){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\DateTime
	 */
	protected static function UnsafeCreate($ticks){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowTicksOutOfRange(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowInvalidKind(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowMillisecondOutOfRange(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowMicrosecondOutOfRange(){}
	/**
	 * @param \System\Int32|int $param
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowDateArithmetic($param){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowAddOutOfRange(){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\DateTimeKind $kind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Init($year, $month, $day, $hour, $minute, $second, $millisecond, $kind){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateLeapSecond(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UTicks(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InternalKind(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\DateTime
	 */
	public  function Add($value){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\Int64|int $maxUnitCount
	 * @param \System\Int64|int $ticksPerUnit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddUnits($value, $maxUnitCount, $ticksPerUnit){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddDays($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddHours($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddMilliseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddMicroseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddMinutes($value){}
	/**
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	public  function AddMonths($months){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\DateTime
	 */
	public  function AddSeconds($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\DateTime
	 */
	public  function AddTicks($value){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\DateTime& $result
	 * @return \System\Boolean
	 */
	protected  function TryAddTicks($value, $result){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateTime
	 */
	public  function AddYears($value){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Int32|int
	 */
	public static function Compare($t1, $t2){}
	/**
	 * @uses DateTimeMethodsOverride::CompareTo_1 ($value)
	 * @uses DateTimeMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DateToTicks($year, $month, $day){}
	/**
	 * @param \System\UInt32 $year
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DaysToYear($year){}
	/**
	 * @uses DateTimeMethodsOverride::TimeToTicks_1 ($hour, $minute, $second)
	 * @uses DateTimeMethodsOverride::TimeToTicks_2 ($hour, $minute, $second, $millisecond)
	 * @uses DateTimeMethodsOverride::TimeToTicks_3 ($hour, $minute, $second, $millisecond, $microsecond)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TimeToTicks(mixed ...$args){}
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
	 * @uses DateTimeMethodsOverride::Equals_1 ($value)
	 * @uses DateTimeMethodsOverride::Equals_2 ($value)
	 * @uses DateTimeMethodsOverride::Equals_3 ($t1, $t2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
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
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsDaylightSavingTime(){}
	/**
	 * @param \System\DateTime $value
	 * @param \System\DateTimeKind $kind
	 * @return \System\DateTime
	 */
	public static function SpecifyKind($value, $kind){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToBinary(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_Date(){}
	/**
	 * @param \System\Int32& $year
	 * @param \System\Int32& $month
	 * @param \System\Int32& $day
	 * @return \System\Void|void
	 */
	protected  function GetDate($year, $month, $day){}
	/**
	 * @uses DateTimeMethodsOverride::GetTime_1 ($hour, $minute, $second)
	 * @uses DateTimeMethodsOverride::GetTime_2 ($hour, $minute, $second, $millisecond)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTime(mixed ...$args){}
	/**
	 * @param \System\Int32& $hour
	 * @param \System\Int32& $minute
	 * @param \System\Int32& $second
	 * @param \System\Int32& $tick
	 * @return \System\Void|void
	 */
	protected  function GetTimePrecise($hour, $minute, $second, $tick){}
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
	 * @return \System\Boolean
	 */
	protected  function IsAmbiguousDaylightSavingTime(){}
	/**
	 * @return \System\DateTimeKind
	 */
	public  function get_Kind(){}
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
	 * @return \System\DateTime
	 */
	public static function get_Now(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Second(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Ticks(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_TimeOfDay(){}
	/**
	 * @return \System\DateTime
	 */
	public static function get_Today(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Year(){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Boolean
	 */
	public static function IsLeapYear($year){}
	/**
	 * @uses DateTimeMethodsOverride::Parse_1 ($s)
	 * @uses DateTimeMethodsOverride::Parse_2 ($s, $provider)
	 * @uses DateTimeMethodsOverride::Parse_3 ($s, $provider, $styles)
	 * @uses DateTimeMethodsOverride::Parse_4 ($s, $provider, $styles)
	 * @uses DateTimeMethodsOverride::Parse_5 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses DateTimeMethodsOverride::ParseExact_1 ($s, $format, $provider)
	 * @uses DateTimeMethodsOverride::ParseExact_2 ($s, $format, $provider, $style)
	 * @uses DateTimeMethodsOverride::ParseExact_3 ($s, $format, $provider, $style)
	 * @uses DateTimeMethodsOverride::ParseExact_4 ($s, $formats, $provider, $style)
	 * @uses DateTimeMethodsOverride::ParseExact_5 ($s, $formats, $provider, $style)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses DateTimeMethodsOverride::Subtract_1 ($value)
	 * @uses DateTimeMethodsOverride::Subtract_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Subtract(mixed ...$args){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TicksToOADate($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function ToOADate(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToFileTime(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToFileTimeUtc(){}
	/**
	 * @return \System\DateTime
	 */
	public  function ToLocalTime(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToLongDateString(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToLongTimeString(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToShortDateString(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToShortTimeString(){}
	/**
	 * @uses DateTimeMethodsOverride::ToString_1 ()
	 * @uses DateTimeMethodsOverride::ToString_2 ($format)
	 * @uses DateTimeMethodsOverride::ToString_3 ($provider)
	 * @uses DateTimeMethodsOverride::ToString_4 ($format, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean
	 */
	public  function TryFormat($destination, $charsWritten, $format, $provider){}
	/**
	 * @return \System\DateTime
	 */
	public  function ToUniversalTime(){}
	/**
	 * @uses DateTimeMethodsOverride::TryParse_1 ($s, $result)
	 * @uses DateTimeMethodsOverride::TryParse_2 ($s, $result)
	 * @uses DateTimeMethodsOverride::TryParse_3 ($s, $provider, $styles, $result)
	 * @uses DateTimeMethodsOverride::TryParse_4 ($s, $provider, $styles, $result)
	 * @uses DateTimeMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses DateTimeMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @uses DateTimeMethodsOverride::TryParseExact_1 ($s, $format, $provider, $style, $result)
	 * @uses DateTimeMethodsOverride::TryParseExact_2 ($s, $format, $provider, $style, $result)
	 * @uses DateTimeMethodsOverride::TryParseExact_3 ($s, $formats, $provider, $style, $result)
	 * @uses DateTimeMethodsOverride::TryParseExact_4 ($s, $formats, $provider, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @param \System\DateTime $d
	 * @param \System\TimeSpan $t
	 * @return \System\DateTime
	 */
	public static function op_Addition($d, $t){}
	/**
	 * @uses DateTimeMethodsOverride::op_Subtraction_1 ($d, $t)
	 * @uses DateTimeMethodsOverride::op_Subtraction_2 ($d1, $d2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @param \System\DateTime $d1
	 * @param \System\DateTime $d2
	 * @return \System\Boolean
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\DateTime $d1
	 * @param \System\DateTime $d2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($d1, $d2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean
	 */
	public static function op_LessThan($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($t1, $t2){}
	/**
	 * @param \System\DateTime $t1
	 * @param \System\DateTime $t2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($t1, $t2){}
	/**
	 * @uses DateTimeMethodsOverride::GetDateTimeFormats_1 ()
	 * @uses DateTimeMethodsOverride::GetDateTimeFormats_2 ($provider)
	 * @uses DateTimeMethodsOverride::GetDateTimeFormats_3 ($format)
	 * @uses DateTimeMethodsOverride::GetDateTimeFormats_4 ($format, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetDateTimeFormats(mixed ...$args){}
	/**
	 * @return \System\TypeCode
	 */
	public  function GetTypeCode(){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToBoolean($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToChar($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSingle($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDouble($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDecimal($provider){}
	/**
	 * @param \System\String|string $to
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvalidCast($to){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDateTime($provider){}
	/**
	 * @param \System\Type $type
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToType($type, $provider){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\DateTime& $result
	 * @return \System\Boolean
	 */
	protected static function TryCreate($year, $month, $day, $hour, $minute, $second, $millisecond, $result){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SystemSupportsLeapSeconds(){}
	/**
	 * @return \System\DateTime
	 */
	public static function get_UtcNow(){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\DateTimeKind $kind
	 * @return \System\Boolean
	 */
	protected static function IsValidTimeWithLeapSeconds($year, $month, $day, $hour, $minute, $kind){}
	/**
	 * @param \System\UInt64 $fileTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FromFileTimeLeapSecondsAware($fileTime){}
	/**
	 * @param \System\Int64|int $ticks
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToFileTimeLeapSecondsAware($ticks){}
	/**
	 * @param \\SYSTEMTIME& $time
	 * @param \System\UInt64 $hundredNanoSecond
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDateTimeFromSystemTime($time, $hundredNanoSecond){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGetSystemTimeAsFileTimeFnPtr(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateLeapSecondCacheAndReturnUtcNow(){}
}
