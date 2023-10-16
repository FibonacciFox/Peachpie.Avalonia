<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IntPtrMethodsOverride
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
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Explicit_1($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Explicit_3($value){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function op_Explicit_4($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Explicit_5($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function op_Explicit_6($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Addition_1($pointer, $offset){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function op_Addition_2($left, $right){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Subtraction_1($pointer, $offset){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function op_Subtraction_2($left, $right){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function get_MaxValue_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function get_MaxValue_2(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function get_MinValue_1(){}
	/**
	 * @return \System\IntPtr
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
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Parse_2($s, $style){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Parse_4($s, $style, $provider){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Parse_5($s, $provider){}
	/**
	 * @return \System\IntPtr
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
class IntPtr extends \System\ValueType implements 
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
	\System\Numerics\ISignedNumber_1
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public readonly $Zero;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\IntPtr
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
	 * @uses IntPtrMethodsOverride::Equals_1 ($obj)
	 * @uses IntPtrMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ToInt32(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function ToInt64(){}
	/**
	 * @uses IntPtrMethodsOverride::op_Explicit_1 ($value)
	 * @uses IntPtrMethodsOverride::op_Explicit_2 ($value)
	 * @uses IntPtrMethodsOverride::op_Explicit_3 ($value)
	 * @uses IntPtrMethodsOverride::op_Explicit_4 ($value)
	 * @uses IntPtrMethodsOverride::op_Explicit_5 ($value)
	 * @uses IntPtrMethodsOverride::op_Explicit_6 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\IntPtr $value1
	 * @param \System\IntPtr $value2
	 * @return \System\Boolean
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\IntPtr $value1
	 * @param \System\IntPtr $value2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @param \System\IntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\IntPtr
	 */
	public static function Add($pointer, $offset){}
	/**
	 * @uses IntPtrMethodsOverride::op_Addition_1 ($pointer, $offset)
	 * @uses IntPtrMethodsOverride::op_Addition_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Addition(mixed ...$args){}
	/**
	 * @param \System\IntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\IntPtr
	 */
	public static function Subtract($pointer, $offset){}
	/**
	 * @uses IntPtrMethodsOverride::op_Subtraction_1 ($pointer, $offset)
	 * @uses IntPtrMethodsOverride::op_Subtraction_2 ($left, $right)
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
	 * @uses IntPtrMethodsOverride::get_MaxValue_1 ()
	 * @uses IntPtrMethodsOverride::get_MaxValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function get_MaxValue(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::get_MinValue_1 ()
	 * @uses IntPtrMethodsOverride::get_MinValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function get_MinValue(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::CompareTo_1 ($value)
	 * @uses IntPtrMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::ToString_1 ()
	 * @uses IntPtrMethodsOverride::ToString_2 ($format)
	 * @uses IntPtrMethodsOverride::ToString_3 ($provider)
	 * @uses IntPtrMethodsOverride::ToString_4 ($format, $provider)
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
	 * @uses IntPtrMethodsOverride::Parse_1 ($s)
	 * @uses IntPtrMethodsOverride::Parse_2 ($s, $style)
	 * @uses IntPtrMethodsOverride::Parse_3 ($s, $provider)
	 * @uses IntPtrMethodsOverride::Parse_4 ($s, $style, $provider)
	 * @uses IntPtrMethodsOverride::Parse_5 ($s, $provider)
	 * @uses IntPtrMethodsOverride::Parse_6 ($s, $style, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::TryParse_1 ($s, $result)
	 * @uses IntPtrMethodsOverride::TryParse_2 ($s, $provider, $result)
	 * @uses IntPtrMethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses IntPtrMethodsOverride::TryParse_4 ($s, $result)
	 * @uses IntPtrMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses IntPtrMethodsOverride::TryParse_6 ($s, $style, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
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
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @return \System\ValueTuple_2
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	public static function PopCount($value){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\IntPtr
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\IntPtr
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	public static function TrailingZeroCount($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\IntPtr& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadBigEndian($source, $isUnsigned, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\IntPtr& $value
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
	 * @param \System\IntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	public static function Log2($value){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_OnesComplement($value){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThan($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Decrement($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedDecrement($value){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Division($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Increment($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedIncrement($value){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
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
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Multiply($left, $right){}
	/**
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\IntPtr $min
	 * @param \System\IntPtr $max
	 * @return \System\IntPtr
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\IntPtr $sign
	 * @return \System\IntPtr
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @return \System\IntPtr
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxNumber($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @return \System\IntPtr
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinNumber($x, $y){}
	/**
	 * @param \System\IntPtr $value
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
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	public static function Abs($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\IntPtr
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\IntPtr
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\IntPtr
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCanonical($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsEvenInteger($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFinite($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInfinity($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInteger($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNaN($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsNegative($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegativeInfinity($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNormal($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Boolean
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositiveInfinity($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRealNumber($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSubnormal($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @return \System\IntPtr
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @return \System\IntPtr
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\IntPtr $x
	 * @param \System\IntPtr $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitudeNumber($x, $y){}
	/**
	 * @uses IntPtrMethodsOverride::TryConvertFromChecked_1 ($value, $result)
	 * @uses IntPtrMethodsOverride::TryConvertFromChecked_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromChecked(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::TryConvertFromSaturating_1 ($value, $result)
	 * @uses IntPtrMethodsOverride::TryConvertFromSaturating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromSaturating(mixed ...$args){}
	/**
	 * @uses IntPtrMethodsOverride::TryConvertFromTruncating_1 ($value, $result)
	 * @uses IntPtrMethodsOverride::TryConvertFromTruncating_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromTruncating(mixed ...$args){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LeftShift($value, $shiftAmount){}
	/**
	 * @param \System\IntPtr $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_RightShift($value, $shiftAmount){}
	/**
	 * @param \System\IntPtr $value
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
	 * @param \System\IntPtr $left
	 * @param \System\IntPtr $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedSubtraction($left, $right){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryNegation($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedUnaryNegation($value){}
	/**
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryPlus($value){}
}
