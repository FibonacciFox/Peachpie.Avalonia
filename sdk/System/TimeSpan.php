<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimeSpanMethodsOverride
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_3($t1, $t2){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public  function Divide_1($divisor){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function Divide_2($ts){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function Parse_2($input, $formatProvider){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function Parse_3($input, $formatProvider){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_1($input, $format, $formatProvider){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_2($input, $formats, $formatProvider){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_3($input, $format, $formatProvider, $styles){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_4($input, $format, $formatProvider, $styles){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_5($input, $formats, $formatProvider, $styles){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function ParseExact_6($input, $formats, $formatProvider, $styles){}
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
	#[MethodOverride] public static function TryParse_3($input, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($input, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_1($input, $format, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_2($input, $format, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_3($input, $formats, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_4($input, $formats, $formatProvider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_5($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_6($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_7($input, $formats, $formatProvider, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_8($input, $formats, $formatProvider, $styles, $result){}
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
	#[MethodOverride] public  function ToString_3($format, $formatProvider){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function op_Multiply_1($timeSpan, $factor){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function op_Multiply_2($factor, $timeSpan){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public static function op_Division_1($timeSpan, $divisor){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function op_Division_2($t1, $t2){}
}
/**
 */
class TimeSpan extends \System\ValueType implements 
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	/**
	 * @var \System\Int64
	 * @field
	 */
	protected readonly $_ticks;
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	public readonly $Zero;
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	public readonly $MinValue;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $NanosecondsPerTick;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerMicrosecond;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerMillisecond;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerSecond;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerMinute;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerHour;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $TicksPerDay;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Ticks;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Days;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Hours;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Milliseconds;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Microseconds;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Nanoseconds;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Minutes;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Seconds;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalDays;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalHours;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalMilliseconds;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalMicroseconds;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalNanoseconds;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalMinutes;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TotalSeconds;
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Ticks(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Days(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Hours(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Milliseconds(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Microseconds(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Nanoseconds(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Minutes(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Seconds(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalDays(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalHours(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalMilliseconds(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalMicroseconds(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalNanoseconds(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalMinutes(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TotalSeconds(){}
	/**
	 * @param \System\TimeSpan $ts
	 * @return \System\TimeSpan
	 */
	public  function Add($ts){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Int32|int
	 */
	public static function Compare($t1, $t2){}
	/**
	 * @uses TimeSpanMethodsOverride::CompareTo_1 ($value)
	 * @uses TimeSpanMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromDays($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function Duration(){}
	/**
	 * @uses TimeSpanMethodsOverride::Equals_1 ($value)
	 * @uses TimeSpanMethodsOverride::Equals_2 ($obj)
	 * @uses TimeSpanMethodsOverride::Equals_3 ($t1, $t2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromHours($value){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\Double|double $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Interval($value, $scale){}
	/**
	 * @param \System\Double|double $ticks
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntervalFromDoubleTicks($ticks){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMilliseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMicroseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMinutes($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function Negate(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromSeconds($value){}
	/**
	 * @param \System\TimeSpan $ts
	 * @return \System\TimeSpan
	 */
	public  function Subtract($ts){}
	/**
	 * @param \System\Double|double $factor
	 * @return \System\TimeSpan
	 */
	public  function Multiply($factor){}
	/**
	 * @uses TimeSpanMethodsOverride::Divide_1 ($divisor)
	 * @uses TimeSpanMethodsOverride::Divide_2 ($ts)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Divide(mixed ...$args){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\TimeSpan
	 */
	public static function FromTicks($value){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @return \System\Int64|int
	 */
	protected static function TimeToTicks($hour, $minute, $second){}
	/**
	 * @param \System\Globalization\TimeSpanStyles $style
	 * @param \System\String|string $parameterName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateStyles($style, $parameterName){}
	/**
	 * @uses TimeSpanMethodsOverride::Parse_1 ($s)
	 * @uses TimeSpanMethodsOverride::Parse_2 ($input, $formatProvider)
	 * @uses TimeSpanMethodsOverride::Parse_3 ($input, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses TimeSpanMethodsOverride::ParseExact_1 ($input, $format, $formatProvider)
	 * @uses TimeSpanMethodsOverride::ParseExact_2 ($input, $formats, $formatProvider)
	 * @uses TimeSpanMethodsOverride::ParseExact_3 ($input, $format, $formatProvider, $styles)
	 * @uses TimeSpanMethodsOverride::ParseExact_4 ($input, $format, $formatProvider, $styles)
	 * @uses TimeSpanMethodsOverride::ParseExact_5 ($input, $formats, $formatProvider, $styles)
	 * @uses TimeSpanMethodsOverride::ParseExact_6 ($input, $formats, $formatProvider, $styles)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses TimeSpanMethodsOverride::TryParse_1 ($s, $result)
	 * @uses TimeSpanMethodsOverride::TryParse_2 ($s, $result)
	 * @uses TimeSpanMethodsOverride::TryParse_3 ($input, $formatProvider, $result)
	 * @uses TimeSpanMethodsOverride::TryParse_4 ($input, $formatProvider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @uses TimeSpanMethodsOverride::TryParseExact_1 ($input, $format, $formatProvider, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_2 ($input, $format, $formatProvider, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_3 ($input, $formats, $formatProvider, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_4 ($input, $formats, $formatProvider, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_5 ($input, $format, $formatProvider, $styles, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_6 ($input, $format, $formatProvider, $styles, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_7 ($input, $formats, $formatProvider, $styles, $result)
	 * @uses TimeSpanMethodsOverride::TryParseExact_8 ($input, $formats, $formatProvider, $styles, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @uses TimeSpanMethodsOverride::ToString_1 ()
	 * @uses TimeSpanMethodsOverride::ToString_2 ($format)
	 * @uses TimeSpanMethodsOverride::ToString_3 ($format, $formatProvider)
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
	 * @param \System\TimeSpan $t
	 * @return \System\TimeSpan
	 */
	public static function op_UnaryNegation($t){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Subtraction($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t
	 * @return \System\TimeSpan
	 */
	public static function op_UnaryPlus($t){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Addition($t1, $t2){}
	/**
	 * @uses TimeSpanMethodsOverride::op_Multiply_1 ($timeSpan, $factor)
	 * @uses TimeSpanMethodsOverride::op_Multiply_2 ($factor, $timeSpan)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @uses TimeSpanMethodsOverride::op_Division_1 ($timeSpan, $divisor)
	 * @uses TimeSpanMethodsOverride::op_Division_2 ($t1, $t2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Division(mixed ...$args){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_Equality($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_LessThan($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($t1, $t2){}
}
