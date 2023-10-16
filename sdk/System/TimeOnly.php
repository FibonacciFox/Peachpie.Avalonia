<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimeOnlyMethodsOverride
{
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] private  function AddTicks_1($ticks){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] private  function AddTicks_2($ticks, $wrappedDays){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function Add_1($value){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function Add_2($value, $wrappedDays){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function AddHours_1($value){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function AddHours_2($value, $wrappedDays){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function AddMinutes_1($value){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public  function AddMinutes_2($value, $wrappedDays){}
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
	#[MethodOverride] public  function Equals_2($value){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function Parse_1($s, $provider, $style){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function Parse_2($s){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function Parse_3($s, $provider, $style){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function Parse_4($s, $provider){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_1($s, $format, $provider, $style){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_2($s, $formats){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_3($s, $formats, $provider, $style){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_4($s, $format){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_5($s, $format, $provider, $style){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_6($s, $formats){}
	/**
	 * @return \System\TimeOnly
	 */
	#[MethodOverride] public static function ParseExact_7($s, $formats, $provider, $style){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($s, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($s, $provider, $style, $result){}
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
	#[MethodOverride] public static function TryParseExact_1($s, $format, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_2($s, $format, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_3($s, $formats, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_4($s, $formats, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_5($s, $format, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_6($s, $format, $provider, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_7($s, $formats, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_8($s, $formats, $provider, $style, $result){}
	/**
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride] private static function TryParseExactInternal_1($s, $format, $provider, $style, $result){}
	/**
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride] private static function TryParseExactInternal_2($s, $formats, $provider, $style, $result){}
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
}
/**
 */
class TimeOnly extends \System\ValueType implements 
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	/**
	 * @var \System\TimeOnly
	 * @property
	 */
	public readonly $MinValue;
	/**
	 * @var \System\TimeOnly
	 * @property
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Hour;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Minute;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Second;
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
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Ticks;
	/**
	 * @return \System\TimeOnly
	 */
	public static function get_MinValue(){}
	/**
	 * @return \System\TimeOnly
	 */
	public static function get_MaxValue(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Hour(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Minute(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Second(){}
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
	 * @return \System\Int64|int
	 */
	public  function get_Ticks(){}
	/**
	 * @uses TimeOnlyMethodsOverride::AddTicks_1 ($ticks)
	 * @uses TimeOnlyMethodsOverride::AddTicks_2 ($ticks, $wrappedDays)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddTicks(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::Add_1 ($value)
	 * @uses TimeOnlyMethodsOverride::Add_2 ($value, $wrappedDays)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::AddHours_1 ($value)
	 * @uses TimeOnlyMethodsOverride::AddHours_2 ($value, $wrappedDays)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHours(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::AddMinutes_1 ($value)
	 * @uses TimeOnlyMethodsOverride::AddMinutes_2 ($value, $wrappedDays)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMinutes(mixed ...$args){}
	/**
	 * @param \System\TimeOnly $start
	 * @param \System\TimeOnly $end
	 * @return \System\Boolean
	 */
	public  function IsBetween($start, $end){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\TimeOnly $t1
	 * @param \System\TimeOnly $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Subtraction($t1, $t2){}
	/**
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\TimeOnly
	 */
	public static function FromTimeSpan($timeSpan){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\TimeOnly
	 */
	public static function FromDateTime($dateTime){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function ToTimeSpan(){}
	/**
	 * @return \System\DateTime
	 */
	protected  function ToDateTime(){}
	/**
	 * @uses TimeOnlyMethodsOverride::CompareTo_1 ($value)
	 * @uses TimeOnlyMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::Equals_1 ($value)
	 * @uses TimeOnlyMethodsOverride::Equals_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::Parse_1 ($s, $provider, $style)
	 * @uses TimeOnlyMethodsOverride::Parse_2 ($s)
	 * @uses TimeOnlyMethodsOverride::Parse_3 ($s, $provider, $style)
	 * @uses TimeOnlyMethodsOverride::Parse_4 ($s, $provider)
	 * @uses TimeOnlyMethodsOverride::Parse_5 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::ParseExact_1 ($s, $format, $provider, $style)
	 * @uses TimeOnlyMethodsOverride::ParseExact_2 ($s, $formats)
	 * @uses TimeOnlyMethodsOverride::ParseExact_3 ($s, $formats, $provider, $style)
	 * @uses TimeOnlyMethodsOverride::ParseExact_4 ($s, $format)
	 * @uses TimeOnlyMethodsOverride::ParseExact_5 ($s, $format, $provider, $style)
	 * @uses TimeOnlyMethodsOverride::ParseExact_6 ($s, $formats)
	 * @uses TimeOnlyMethodsOverride::ParseExact_7 ($s, $formats, $provider, $style)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::TryParse_1 ($s, $result)
	 * @uses TimeOnlyMethodsOverride::TryParse_2 ($s, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParse_3 ($s, $result)
	 * @uses TimeOnlyMethodsOverride::TryParse_4 ($s, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses TimeOnlyMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInternal($s, $provider, $style, $result){}
	/**
	 * @uses TimeOnlyMethodsOverride::TryParseExact_1 ($s, $format, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_2 ($s, $format, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_3 ($s, $formats, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_4 ($s, $formats, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_5 ($s, $format, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_6 ($s, $format, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_7 ($s, $formats, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExact_8 ($s, $formats, $provider, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @uses TimeOnlyMethodsOverride::TryParseExactInternal_1 ($s, $format, $provider, $style, $result)
	 * @uses TimeOnlyMethodsOverride::TryParseExactInternal_2 ($s, $formats, $provider, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExactInternal(mixed ...$args){}
	/**
	 * @param \System\ParseFailureKind $result
	 * @param \System\ReadOnlySpan_1 $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowOnError($result, $s){}
	/**
	 * @return \System\String|string
	 */
	public  function ToLongTimeString(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToShortTimeString(){}
	/**
	 * @uses TimeOnlyMethodsOverride::ToString_1 ()
	 * @uses TimeOnlyMethodsOverride::ToString_2 ($format)
	 * @uses TimeOnlyMethodsOverride::ToString_3 ($provider)
	 * @uses TimeOnlyMethodsOverride::ToString_4 ($format, $provider)
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
}
