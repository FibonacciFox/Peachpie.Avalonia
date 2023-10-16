<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UIntPtrMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function op_Explicit_1($value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function op_Explicit_3($value){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function op_Explicit_4($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function op_Explicit_5($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function op_Explicit_6($value){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function op_Addition_1($pointer, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function op_Addition_2($left, $right){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function op_Subtraction_1($pointer, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function op_Subtraction_2($left, $right){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function get_MaxValue_1(){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function get_MaxValue_2(){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function get_MinValue_1(){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function get_MinValue_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
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
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_2($s, $style){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_4($s, $style, $provider){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Parse_6($s, $style, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($s, $style, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_5($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_6($s, $style, $provider, $result){}
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
class UIntPtr extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\IComparable,
	\System\IComparable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\Runtime\Serialization\ISerializable,
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
	\System\Numerics\IUnsignedNumber_1
{
	/**
	 * @var \System\UIntPtr
	 * @field
	 */
	public readonly $Zero;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\UIntPtr
	 * @property
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\UIntPtr
	 * @property
	 */
	public readonly $MinValue;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @uses UIntPtrMethodsOverride::Equals_1 ($obj)
	 * @uses UIntPtrMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\UInt32
	 */
	public  function ToUInt32(){}
	/**
	 * @return \System\UInt64
	 */
	public  function ToUInt64(){}
	/**
	 * @uses UIntPtrMethodsOverride::op_Explicit_1 ($value)
	 * @uses UIntPtrMethodsOverride::op_Explicit_2 ($value)
	 * @uses UIntPtrMethodsOverride::op_Explicit_3 ($value)
	 * @uses UIntPtrMethodsOverride::op_Explicit_4 ($value)
	 * @uses UIntPtrMethodsOverride::op_Explicit_5 ($value)
	 * @uses UIntPtrMethodsOverride::op_Explicit_6 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\UIntPtr $value1
	 * @param \System\UIntPtr $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\UIntPtr $value1
	 * @param \System\UIntPtr $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	public static function Add($pointer, $offset){}
	/**
	 * @uses UIntPtrMethodsOverride::op_Addition_1 ($pointer, $offset)
	 * @uses UIntPtrMethodsOverride::op_Addition_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Addition(mixed ...$args){}
	/**
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	public static function Subtract($pointer, $offset){}
	/**
	 * @uses UIntPtrMethodsOverride::op_Subtraction_1 ($pointer, $offset)
	 * @uses UIntPtrMethodsOverride::op_Subtraction_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public static function get_Size(){}
	/**
	 * @return \System\Void*
	 */
	public  function ToPointer(){}
	/**
	 * @uses UIntPtrMethodsOverride::get_MaxValue_1 ()
	 * @uses UIntPtrMethodsOverride::get_MaxValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function get_MaxValue(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::get_MinValue_1 ()
	 * @uses UIntPtrMethodsOverride::get_MinValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function get_MinValue(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::CompareTo_1 ($value)
	 * @uses UIntPtrMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::ToString_1 ()
	 * @uses UIntPtrMethodsOverride::ToString_2 ($format)
	 * @uses UIntPtrMethodsOverride::ToString_3 ($provider)
	 * @uses UIntPtrMethodsOverride::ToString_4 ($format, $provider)
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
	 * @uses UIntPtrMethodsOverride::Parse_1 ($s)
	 * @uses UIntPtrMethodsOverride::Parse_2 ($s, $style)
	 * @uses UIntPtrMethodsOverride::Parse_3 ($s, $provider)
	 * @uses UIntPtrMethodsOverride::Parse_4 ($s, $style, $provider)
	 * @uses UIntPtrMethodsOverride::Parse_5 ($s, $provider)
	 * @uses UIntPtrMethodsOverride::Parse_6 ($s, $style, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::TryParse_1 ($s, $result)
	 * @uses UIntPtrMethodsOverride::TryParse_2 ($s, $provider, $result)
	 * @uses UIntPtrMethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses UIntPtrMethodsOverride::TryParse_4 ($s, $result)
	 * @uses UIntPtrMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses UIntPtrMethodsOverride::TryParse_6 ($s, $style, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
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
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @return \System\ValueTuple_2
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	public static function PopCount($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\UIntPtr
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\UIntPtr
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	public static function TrailingZeroCount($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\UIntPtr& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadBigEndian($source, $isUnsigned, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\UIntPtr& $value
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
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	public static function Log2($value){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_OnesComplement($value){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThan($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Decrement($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedDecrement($value){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Division($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Increment($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedIncrement($value){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
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
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Multiply($left, $right){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\UIntPtr $min
	 * @param \System\UIntPtr $max
	 * @return \System\UIntPtr
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\UIntPtr $sign
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopySign($value, $sign){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @return \System\UIntPtr
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxNumber($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @return \System\UIntPtr
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinNumber($x, $y){}
	/**
	 * @param \System\UIntPtr $value
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
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Abs($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCanonical($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsEvenInteger($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFinite($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInfinity($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInteger($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNaN($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegative($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegativeInfinity($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNormal($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositive($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositiveInfinity($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRealNumber($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSubnormal($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitude($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitudeNumber($x, $y){}
	/**
	 * @uses UIntPtrMethodsOverride::TryConvertFromChecked_1 ($value, $result)
	 * @uses UIntPtrMethodsOverride::TryConvertFromChecked_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromChecked(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::TryConvertFromSaturating_1 ($value, $result)
	 * @uses UIntPtrMethodsOverride::TryConvertFromSaturating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromSaturating(mixed ...$args){}
	/**
	 * @uses UIntPtrMethodsOverride::TryConvertFromTruncating_1 ($value, $result)
	 * @uses UIntPtrMethodsOverride::TryConvertFromTruncating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromTruncating(mixed ...$args){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LeftShift($value, $shiftAmount){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_RightShift($value, $shiftAmount){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnsignedRightShift($value, $shiftAmount){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedSubtraction($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryNegation($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedUnaryNegation($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryPlus($value){}
}
