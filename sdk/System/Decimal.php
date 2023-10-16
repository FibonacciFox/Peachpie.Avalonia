<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecimalMethodsOverride
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
	#[MethodOverride] public  function Equals_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_3($d1, $d2){}
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
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Parse_2($s, $style){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Parse_4($s, $style, $provider){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Parse_5($s, $style, $provider){}
	/**
	 * @return \System\Decimal
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
	 * @return \System\Int32[]
	 */
	#[MethodOverride] public static function GetBits_1($d){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetBits_2($d, $destination){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] protected static function ToDecimal_1($span){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] private  function ToDecimal_2($provider){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_1($d){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_2($d, $decimals){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_3($d, $mode){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Round_4($d, $decimals, $mode){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] private static function Round_5($d, $decimals, $mode){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function ToByte_1($value){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] private  function ToByte_2($provider){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function ToSByte_1($value){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] private  function ToSByte_2($provider){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ToInt16_1($value){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] private  function ToInt16_2($provider){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function ToDouble_1($d){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function ToDouble_2($provider){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ToInt32_1($d){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function ToInt32_2($provider){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ToInt64_1($d){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] private  function ToInt64_2($provider){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function ToUInt16_1($value){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] private  function ToUInt16_2($provider){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function ToUInt32_1($d){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private  function ToUInt32_2($provider){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function ToUInt64_1($d){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private  function ToUInt64_2($provider){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function ToSingle_1($d){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] private  function ToSingle_2($provider){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function Truncate_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function Truncate_2($d){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_1($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_2($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_3($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_4($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_5($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_6($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_7($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_8($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Implicit_9($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Explicit_1($value){}
	/**
	 * @return \System\Decimal
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function op_Explicit_3($value){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function op_Explicit_4($value){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function op_Explicit_5($value){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function op_Explicit_6($value){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function op_Explicit_7($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Explicit_8($value){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function op_Explicit_9($value){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function op_Explicit_10($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function op_Explicit_11($value){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function op_Explicit_12($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function op_Explicit_13($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromChecked_1($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertFromChecked_2($value, $result){}
}
/**
 */
class Decimal extends \System\ValueType implements 
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable,
	\System\IConvertible,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Numerics\IFloatingPoint_1,
	\System\Numerics\IFloatingPointConstants_1,
	\System\Numerics\INumberBase_1,
	\System\Numerics\IAdditionOperators_3,
	\System\Numerics\IAdditiveIdentity_2,
	\System\Numerics\IDecrementOperators_1,
	\System\Numerics\IDivisionOperators_3,
	\System\Numerics\IEqualityOperators_3,
	\System\Numerics\IIncrementOperators_1,
	\System\Numerics\IMultiplicativeIdentity_2,
	\System\Numerics\IMultiplyOperators_3,
	\System\ISpanParsable_1,
	\System\IParsable_1,
	\System\Numerics\ISubtractionOperators_3,
	\System\Numerics\IUnaryPlusOperators_2,
	\System\Numerics\IUnaryNegationOperators_2,
	\System\Numerics\INumber_1,
	\System\Numerics\IComparisonOperators_3,
	\System\Numerics\IModulusOperators_3,
	\System\Numerics\ISignedNumber_1,
	\System\Numerics\IMinMaxValue_1
{
	/**
	 * @var \System\Decimal
	 * @field
	 */
	public readonly $Zero;
	/**
	 * @var \System\Decimal
	 * @field
	 */
	public readonly $One;
	/**
	 * @var \System\Decimal
	 * @field
	 */
	public readonly $MinusOne;
	/**
	 * @var \System\Decimal
	 * @field
	 */
	public readonly $MaxValue;
	/**
	 * @var \System\Decimal
	 * @field
	 */
	public readonly $MinValue;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Scale;
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @param \System\Int64|int $cy
	 * @return \System\Decimal
	 */
	public static function FromOACurrency($cy){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Int64|int
	 */
	public static function ToOACurrency($value){}
	/**
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValid($flags){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @return \System\Byte
	 */
	public  function get_Scale(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Exponent(){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Add($d1, $d2){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function Ceiling($d){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Int32|int
	 */
	public static function Compare($d1, $d2){}
	/**
	 * @uses DecimalMethodsOverride::CompareTo_1 ($value)
	 * @uses DecimalMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Divide($d1, $d2){}
	/**
	 * @uses DecimalMethodsOverride::Equals_1 ($value)
	 * @uses DecimalMethodsOverride::Equals_2 ($value)
	 * @uses DecimalMethodsOverride::Equals_3 ($d1, $d2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function Floor($d){}
	/**
	 * @uses DecimalMethodsOverride::ToString_1 ()
	 * @uses DecimalMethodsOverride::ToString_2 ($format)
	 * @uses DecimalMethodsOverride::ToString_3 ($provider)
	 * @uses DecimalMethodsOverride::ToString_4 ($format, $provider)
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
	 * @uses DecimalMethodsOverride::Parse_1 ($s)
	 * @uses DecimalMethodsOverride::Parse_2 ($s, $style)
	 * @uses DecimalMethodsOverride::Parse_3 ($s, $provider)
	 * @uses DecimalMethodsOverride::Parse_4 ($s, $style, $provider)
	 * @uses DecimalMethodsOverride::Parse_5 ($s, $style, $provider)
	 * @uses DecimalMethodsOverride::Parse_6 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::TryParse_1 ($s, $result)
	 * @uses DecimalMethodsOverride::TryParse_2 ($s, $result)
	 * @uses DecimalMethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses DecimalMethodsOverride::TryParse_4 ($s, $style, $provider, $result)
	 * @uses DecimalMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @uses DecimalMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::GetBits_1 ($d)
	 * @uses DecimalMethodsOverride::GetBits_2 ($d, $destination)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetBits(mixed ...$args){}
	/**
	 * @param \System\Decimal $d
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $valuesWritten
	 * @return \System\Boolean
	 */
	public static function TryGetBits($d, $destination, $valuesWritten){}
	/**
	 * @param \System\Decimal& $d
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	protected static function GetBytes($d, $buffer){}
	/**
	 * @uses DecimalMethodsOverride::ToDecimal_1 ($span)
	 * @uses DecimalMethodsOverride::ToDecimal_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDecimal(mixed ...$args){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Remainder($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Multiply($d1, $d2){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function Negate($d){}
	/**
	 * @uses DecimalMethodsOverride::Round_1 ($d)
	 * @uses DecimalMethodsOverride::Round_2 ($d, $decimals)
	 * @uses DecimalMethodsOverride::Round_3 ($d, $mode)
	 * @uses DecimalMethodsOverride::Round_4 ($d, $decimals, $mode)
	 * @uses DecimalMethodsOverride::Round_5 ($d, $decimals, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Round(mixed ...$args){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Subtract($d1, $d2){}
	/**
	 * @uses DecimalMethodsOverride::ToByte_1 ($value)
	 * @uses DecimalMethodsOverride::ToByte_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToByte(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToSByte_1 ($value)
	 * @uses DecimalMethodsOverride::ToSByte_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToSByte(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToInt16_1 ($value)
	 * @uses DecimalMethodsOverride::ToInt16_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToInt16(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToDouble_1 ($d)
	 * @uses DecimalMethodsOverride::ToDouble_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToDouble(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToInt32_1 ($d)
	 * @uses DecimalMethodsOverride::ToInt32_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToInt32(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToInt64_1 ($d)
	 * @uses DecimalMethodsOverride::ToInt64_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToInt64(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToUInt16_1 ($value)
	 * @uses DecimalMethodsOverride::ToUInt16_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUInt16(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToUInt32_1 ($d)
	 * @uses DecimalMethodsOverride::ToUInt32_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUInt32(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToUInt64_1 ($d)
	 * @uses DecimalMethodsOverride::ToUInt64_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUInt64(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::ToSingle_1 ($d)
	 * @uses DecimalMethodsOverride::ToSingle_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToSingle(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::Truncate_1 ($d)
	 * @uses DecimalMethodsOverride::Truncate_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Truncate(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::op_Implicit_1 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_2 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_3 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_4 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_5 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_6 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_7 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_8 ($value)
	 * @uses DecimalMethodsOverride::op_Implicit_9 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @uses DecimalMethodsOverride::op_Explicit_1 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_2 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_3 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_4 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_5 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_6 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_7 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_8 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_9 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_10 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_11 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_12 ($value)
	 * @uses DecimalMethodsOverride::op_Explicit_13 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function op_UnaryPlus($d){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function op_UnaryNegation($d){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function op_Increment($d){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function op_Decrement($d){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function op_Addition($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function op_Subtraction($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function op_Multiply($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function op_Division($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function op_Modulus($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_LessThan($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($d1, $d2){}
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
	#[MethodPrivate]  function ToDateTime($provider){}
	/**
	 * @param \System\Type $type
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToType($type, $provider){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AdditiveIdentity(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetExponentByteCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetExponentShortestBitLength(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSignificandByteCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSignificandBitLength(){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteExponentBigEndian($destination, $bytesWritten){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteExponentLittleEndian($destination, $bytesWritten){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteSignificandBigEndian($destination, $bytesWritten){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteSignificandLittleEndian($destination, $bytesWritten){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_E(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Pi(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Tau(){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MultiplicativeIdentity(){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\Decimal $min
	 * @param \System\Decimal $max
	 * @return \System\Decimal
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\Decimal $sign
	 * @return \System\Decimal
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxNumber($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinNumber($x, $y){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Int32|int
	 */
	public static function Sign($d){}
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
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	public static function Abs($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsCanonical($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsEvenInteger($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFinite($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInfinity($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsInteger($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNaN($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsNegative($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegativeInfinity($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNormal($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositiveInfinity($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRealNumber($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSubnormal($value){}
	/**
	 * @param \System\Decimal $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitudeNumber($x, $y){}
	/**
	 * @uses DecimalMethodsOverride::TryConvertFromChecked_1 ($value, $result)
	 * @uses DecimalMethodsOverride::TryConvertFromChecked_2 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertFromChecked(mixed ...$args){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Decimal& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromSaturating($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Decimal& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromTruncating($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Decimal& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFrom($value, $result){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertTo($value, $result){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NegativeOne(){}
	/**
	 * @return \System\UInt32
	 */
	protected  function get_High(){}
	/**
	 * @return \System\UInt32
	 */
	protected  function get_Low(){}
	/**
	 * @return \System\UInt32
	 */
	protected  function get_Mid(){}
	/**
	 * @return \System\UInt64
	 */
	protected  function get_Low64(){}
	/**
	 * @param \System\Decimal& $d
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsMutable($d){}
	/**
	 * @param \System\Decimal& $value
	 * @return \System\UInt32
	 */
	protected static function DecDivMod1E9($value){}
}
