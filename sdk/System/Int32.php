<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Int32MethodsOverride
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
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_2($s, $style){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_4($s, $style, $provider){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_5($s, $style, $provider){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Parse_6($s, $provider){}
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
	#[MethodOverride] public static function TryParse_3($s, $style, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($s, $style, $provider, $result){}
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
	#[MethodOverride] private static function TryConvertFromChecked_1($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromChecked_2($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromSaturating_1($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromSaturating_2($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromTruncating_1($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromTruncating_2($value, $result){}
}
/**
 */
class Int32 extends \System\ValueType implements 
	\System\IComparable,
	\System\IConvertible,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\Numerics\IBinaryInteger_1,
	\System\Numerics\IBinaryNumber_1,
	\System\Numerics\IBitwiseOperators_3,
	\System\Numerics\INumber_1,
	\System\Numerics\IComparisonOperators_3,
	\System\Numerics\IEqualityOperators_3,
	\System\Numerics\IModulusOperators_3,
	\System\Numerics\INumberBase_1,
	\System\Numerics\IAdditionOperators_3,
	\System\Numerics\IAdditiveIdentity_2,
	\System\Numerics\IDecrementOperators_1,
	\System\Numerics\IDivisionOperators_3,
	\System\Numerics\IIncrementOperators_1,
	\System\Numerics\IMultiplicativeIdentity_2,
	\System\Numerics\IMultiplyOperators_3,
	\System\ISpanParsable_1,
	\System\IParsable_1,
	\System\Numerics\ISubtractionOperators_3,
	\System\Numerics\IUnaryPlusOperators_2,
	\System\Numerics\IUnaryNegationOperators_2,
	\System\Numerics\IShiftOperators_3,
	\System\Numerics\IMinMaxValue_1,
	\System\Numerics\ISignedNumber_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MaxValue;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MinValue;
	/**
	 * @uses Int32MethodsOverride::CompareTo_1 ($value)
	 * @uses Int32MethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses Int32MethodsOverride::Equals_1 ($obj)
	 * @uses Int32MethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses Int32MethodsOverride::ToString_1 ()
	 * @uses Int32MethodsOverride::ToString_2 ($format)
	 * @uses Int32MethodsOverride::ToString_3 ($provider)
	 * @uses Int32MethodsOverride::ToString_4 ($format, $provider)
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
	 * @uses Int32MethodsOverride::Parse_1 ($s)
	 * @uses Int32MethodsOverride::Parse_2 ($s, $style)
	 * @uses Int32MethodsOverride::Parse_3 ($s, $provider)
	 * @uses Int32MethodsOverride::Parse_4 ($s, $style, $provider)
	 * @uses Int32MethodsOverride::Parse_5 ($s, $style, $provider)
	 * @uses Int32MethodsOverride::Parse_6 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses Int32MethodsOverride::TryParse_1 ($s, $result)
	 * @uses Int32MethodsOverride::TryParse_2 ($s, $result)
	 * @uses Int32MethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses Int32MethodsOverride::TryParse_4 ($s, $style, $provider, $result)
	 * @uses Int32MethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses Int32MethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
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
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Addition($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedAddition($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AdditiveIdentity(){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @return \System\ValueTuple_2
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function PopCount($value){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\Int32|int
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\Int32|int
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function TrailingZeroCount($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Int32& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadBigEndian($source, $isUnsigned, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Int32& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadLittleEndian($source, $isUnsigned, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetShortestBitLength(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetByteCount(){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteBigEndian($destination, $bytesWritten){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteLittleEndian($destination, $bytesWritten){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AllBitsSet(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function Log2($value){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_OnesComplement($value){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThan($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Decrement($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedDecrement($value){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Division($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Inequality($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Increment($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedIncrement($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MinValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MaxValue(){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Modulus($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MultiplicativeIdentity(){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Multiply($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $min
	 * @param \System\Int32|int $max
	 * @return \System\Int32|int
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $sign
	 * @return \System\Int32|int
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Int32|int
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxNumber($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Int32|int
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinNumber($x, $y){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_One(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Radix(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Zero(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	public static function Abs($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Int32|int
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Int32|int
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Int32|int
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCanonical($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function IsEvenInteger($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFinite($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInfinity($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInteger($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNaN($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function IsNegative($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegativeInfinity($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNormal($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositiveInfinity($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRealNumber($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSubnormal($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Int32|int
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Int32|int
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitudeNumber($x, $y){}
	/**
	 * @uses Int32MethodsOverride::TryConvertFromChecked_1 ($value, $result)
	 * @uses Int32MethodsOverride::TryConvertFromChecked_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromChecked(mixed ...$args){}
	/**
	 * @uses Int32MethodsOverride::TryConvertFromSaturating_1 ($value, $result)
	 * @uses Int32MethodsOverride::TryConvertFromSaturating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromSaturating(mixed ...$args){}
	/**
	 * @uses Int32MethodsOverride::TryConvertFromTruncating_1 ($value, $result)
	 * @uses Int32MethodsOverride::TryConvertFromTruncating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromTruncating(mixed ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LeftShift($value, $shiftAmount){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_RightShift($value, $shiftAmount){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnsignedRightShift($value, $shiftAmount){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NegativeOne(){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedSubtraction($left, $right){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryNegation($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedUnaryNegation($value){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryPlus($value){}
}
