<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateOnlyMethodsOverride
{
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_1($time){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public  function ToDateTime_2($time, $kind){}
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
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function Parse_1($s, $provider, $style){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function Parse_2($s){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function Parse_3($s, $provider, $style){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function Parse_4($s, $provider){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_1($s, $format, $provider, $style){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_2($s, $formats){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_3($s, $formats, $provider, $style){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_4($s, $format){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_5($s, $format, $provider, $style){}
	/**
	 * @return \System\DateOnly
	 */
	#[MethodOverride] public static function ParseExact_6($s, $formats){}
	/**
	 * @return \System\DateOnly
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
class DateOnly extends \System\ValueType implements 
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	/**
	 * @var \System\DateOnly
	 * @property
	 */
	public readonly $MinValue;
	/**
	 * @var \System\DateOnly
	 * @property
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Year;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Month;
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
	public readonly $DayNumber;
	/**
	 * @param \System\DateTime $dt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DayNumberFromDateTime($dt){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEquivalentDateTime(){}
	/**
	 * @return \System\DateOnly
	 */
	public static function get_MinValue(){}
	/**
	 * @return \System\DateOnly
	 */
	public static function get_MaxValue(){}
	/**
	 * @param \System\Int32|int $dayNumber
	 * @return \System\DateOnly
	 */
	public static function FromDayNumber($dayNumber){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Year(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Month(){}
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
	public  function get_DayNumber(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public  function AddDays($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public  function AddMonths($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public  function AddYears($value){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @uses DateOnlyMethodsOverride::ToDateTime_1 ($time)
	 * @uses DateOnlyMethodsOverride::ToDateTime_2 ($time, $kind)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDateTime(mixed ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\DateOnly
	 */
	public static function FromDateTime($dateTime){}
	/**
	 * @uses DateOnlyMethodsOverride::CompareTo_1 ($value)
	 * @uses DateOnlyMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses DateOnlyMethodsOverride::Equals_1 ($value)
	 * @uses DateOnlyMethodsOverride::Equals_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses DateOnlyMethodsOverride::Parse_1 ($s, $provider, $style)
	 * @uses DateOnlyMethodsOverride::Parse_2 ($s)
	 * @uses DateOnlyMethodsOverride::Parse_3 ($s, $provider, $style)
	 * @uses DateOnlyMethodsOverride::Parse_4 ($s, $provider)
	 * @uses DateOnlyMethodsOverride::Parse_5 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses DateOnlyMethodsOverride::ParseExact_1 ($s, $format, $provider, $style)
	 * @uses DateOnlyMethodsOverride::ParseExact_2 ($s, $formats)
	 * @uses DateOnlyMethodsOverride::ParseExact_3 ($s, $formats, $provider, $style)
	 * @uses DateOnlyMethodsOverride::ParseExact_4 ($s, $format)
	 * @uses DateOnlyMethodsOverride::ParseExact_5 ($s, $format, $provider, $style)
	 * @uses DateOnlyMethodsOverride::ParseExact_6 ($s, $formats)
	 * @uses DateOnlyMethodsOverride::ParseExact_7 ($s, $formats, $provider, $style)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses DateOnlyMethodsOverride::TryParse_1 ($s, $result)
	 * @uses DateOnlyMethodsOverride::TryParse_2 ($s, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParse_3 ($s, $result)
	 * @uses DateOnlyMethodsOverride::TryParse_4 ($s, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses DateOnlyMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInternal($s, $provider, $style, $result){}
	/**
	 * @uses DateOnlyMethodsOverride::TryParseExact_1 ($s, $format, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_2 ($s, $format, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_3 ($s, $formats, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_4 ($s, $formats, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_5 ($s, $format, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_6 ($s, $format, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_7 ($s, $formats, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExact_8 ($s, $formats, $provider, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @uses DateOnlyMethodsOverride::TryParseExactInternal_1 ($s, $format, $provider, $style, $result)
	 * @uses DateOnlyMethodsOverride::TryParseExactInternal_2 ($s, $formats, $provider, $style, $result)
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
	public  function ToLongDateString(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToShortDateString(){}
	/**
	 * @uses DateOnlyMethodsOverride::ToString_1 ()
	 * @uses DateOnlyMethodsOverride::ToString_2 ($format)
	 * @uses DateOnlyMethodsOverride::ToString_3 ($provider)
	 * @uses DateOnlyMethodsOverride::ToString_4 ($format, $provider)
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
