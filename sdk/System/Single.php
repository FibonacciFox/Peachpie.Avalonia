<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SingleMethodsOverride
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
	#[MethodOverride] public  function ToString_2($provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_4($format, $provider){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Parse_2($s, $style){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Parse_4($s, $style, $provider){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Parse_5($s, $style, $provider){}
	/**
	 * @return \System\Single
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
	#[MethodOverride] private static function TryParse_5($s, $style, $info, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_6($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_7($s, $provider, $result){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_1($x){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_2($x, $digits){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_3($x, $mode){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Round_4($x, $digits, $mode){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Log_1($x){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Log_2($x, $newBase){}
}
/**
 */
class Single extends \System\ValueType implements 
	\System\IComparable,
	\System\IConvertible,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\Numerics\IBinaryFloatingPointIeee754_1,
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
	\System\Numerics\IFloatingPointIeee754_1,
	\System\Numerics\IExponentialFunctions_1,
	\System\Numerics\IFloatingPointConstants_1,
	\System\Numerics\IFloatingPoint_1,
	\System\Numerics\ISignedNumber_1,
	\System\Numerics\IHyperbolicFunctions_1,
	\System\Numerics\ILogarithmicFunctions_1,
	\System\Numerics\IPowerFunctions_1,
	\System\Numerics\IRootFunctions_1,
	\System\Numerics\ITrigonometricFunctions_1,
	\System\Numerics\IMinMaxValue_1
{
	/**
	 * @var \System\Single
	 * @field
	 */
	public $MinValue;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $MaxValue;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Epsilon;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $NegativeInfinity;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $PositiveInfinity;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $NaN;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $NegativeZero;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $E;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Pi;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Tau;
	/**
	 * @return \System\Byte
	 */
	protected  function get_BiasedExponent(){}
	/**
	 * @return \System\SByte
	 */
	protected  function get_Exponent(){}
	/**
	 * @return \System\UInt32
	 */
	protected  function get_Significand(){}
	/**
	 * @return \System\UInt32
	 */
	protected  function get_TrailingSignificand(){}
	/**
	 * @param \System\UInt32 $bits
	 * @return \System\Byte
	 */
	protected static function ExtractBiasedExponentFromBits($bits){}
	/**
	 * @param \System\UInt32 $bits
	 * @return \System\UInt32
	 */
	protected static function ExtractTrailingSignificandFromBits($bits){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsFinite($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsNaN($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsNegative($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsNegativeInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsNormal($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsPositiveInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean
	 */
	public static function IsSubnormal($f){}
	/**
	 * @uses SingleMethodsOverride::CompareTo_1 ($value)
	 * @uses SingleMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @uses SingleMethodsOverride::Equals_1 ($obj)
	 * @uses SingleMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses SingleMethodsOverride::ToString_1 ()
	 * @uses SingleMethodsOverride::ToString_2 ($provider)
	 * @uses SingleMethodsOverride::ToString_3 ($format)
	 * @uses SingleMethodsOverride::ToString_4 ($format, $provider)
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
	 * @uses SingleMethodsOverride::Parse_1 ($s)
	 * @uses SingleMethodsOverride::Parse_2 ($s, $style)
	 * @uses SingleMethodsOverride::Parse_3 ($s, $provider)
	 * @uses SingleMethodsOverride::Parse_4 ($s, $style, $provider)
	 * @uses SingleMethodsOverride::Parse_5 ($s, $style, $provider)
	 * @uses SingleMethodsOverride::Parse_6 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses SingleMethodsOverride::TryParse_1 ($s, $result)
	 * @uses SingleMethodsOverride::TryParse_2 ($s, $result)
	 * @uses SingleMethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses SingleMethodsOverride::TryParse_4 ($s, $style, $provider, $result)
	 * @uses SingleMethodsOverride::TryParse_5 ($s, $style, $info, $result)
	 * @uses SingleMethodsOverride::TryParse_6 ($s, $provider, $result)
	 * @uses SingleMethodsOverride::TryParse_7 ($s, $provider, $result)
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
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Addition($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AdditiveIdentity(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AllBitsSet(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	public static function Log2($value){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_OnesComplement($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Decrement($value){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Division($left, $right){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function ExpM1($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp2($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp2M1($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp10($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Exp10M1($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Ceiling($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Floor($x){}
	/**
	 * @uses SingleMethodsOverride::Round_1 ($x)
	 * @uses SingleMethodsOverride::Round_2 ($x, $digits)
	 * @uses SingleMethodsOverride::Round_3 ($x, $mode)
	 * @uses SingleMethodsOverride::Round_4 ($x, $digits, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Round(mixed ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Truncate($x){}
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
	#[MethodPrivate] static function get_Epsilon(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NaN(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NegativeInfinity(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NegativeZero(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_PositiveInfinity(){}
	/**
	 * @param \System\Single $y
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atan2($y, $x){}
	/**
	 * @param \System\Single $y
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atan2Pi($y, $x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function BitDecrement($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function BitIncrement($x){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @param \System\Single $addend
	 * @return \System\Single
	 */
	public static function FusedMultiplyAdd($left, $right, $addend){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Single
	 */
	public static function Ieee754Remainder($left, $right){}
	/**
	 * @param \System\Single $x
	 * @return \System\Int32|int
	 */
	public static function ILogB($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function ReciprocalEstimate($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function ReciprocalSqrtEstimate($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Int32|int $n
	 * @return \System\Single
	 */
	public static function ScaleB($x, $n){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Acosh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Asinh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atanh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cosh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sinh($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Tanh($x){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Increment($value){}
	/**
	 * @uses SingleMethodsOverride::Log_1 ($x)
	 * @uses SingleMethodsOverride::Log_2 ($x, $newBase)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Log(mixed ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function LogP1($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Log10($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Log2P1($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Log10P1($x){}
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
	 * @param \System\Single $left
	 * @param \System\Single $right
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
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Multiply($left, $right){}
	/**
	 * @param \System\Single $value
	 * @param \System\Single $min
	 * @param \System\Single $max
	 * @return \System\Single
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Single $value
	 * @param \System\Single $sign
	 * @return \System\Single
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MaxNumber($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MinNumber($x, $y){}
	/**
	 * @param \System\Single $value
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
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	public static function Abs($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Single
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Single
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \System\TOther $value
	 * @return \System\Single
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCanonical($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsEvenInteger($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsInteger($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean
	 */
	public static function IsRealNumber($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function MinMagnitudeNumber($x, $y){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Single& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromChecked($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Single& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromSaturating($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Single& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromTruncating($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Single& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFrom($value, $result){}
	/**
	 * @param \System\Single $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\Single $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\Single $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\Single $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertTo($value, $result){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Pow($x, $y){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cbrt($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Single $y
	 * @return \System\Single
	 */
	public static function Hypot($x, $y){}
	/**
	 * @param \System\Single $x
	 * @param \System\Int32|int $n
	 * @return \System\Single
	 */
	public static function RootN($x, $n){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sqrt($x){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_NegativeOne(){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Acos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function AcosPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Asin($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function AsinPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Atan($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function AtanPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Cos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function CosPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Sin($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\ValueTuple_2
	 */
	public static function SinCos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\ValueTuple_2
	 */
	public static function SinCosPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function SinPi($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Tan($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function TanPi($x){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryNegation($value){}
	/**
	 * @param \System\Single $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryPlus($value){}
	/**
	 * @param \System\Single $x
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CosForIntervalPiBy4($x){}
	/**
	 * @param \System\Single $x
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SinForIntervalPiBy4($x){}
	/**
	 * @param \System\Single $x
	 * @param \System\Boolean $isReciprocal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TanForIntervalPiBy4($x, $isReciprocal){}
}
