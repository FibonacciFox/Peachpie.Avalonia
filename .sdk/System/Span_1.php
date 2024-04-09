<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SingleOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_5 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Parse_6 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_5 ($s, $style, $info, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_7 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Int32|int $digits
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_2 ($x, $digits){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\MidpointRounding $mode
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_3 ($x, $mode){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Int32|int $digits
	 * @param \System\MidpointRounding $mode
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Round_4 ($x, $digits, $mode){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Log_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Single $x
	 * @param \System\Single $newBase
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Log_2 ($x, $newBase){}
}
final class Single extends \System\ValueType implements
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
	use SingleOverride;
	/**
	 * @field
	 * @var \System\Single
	 */
	const MinValue = '-3,4028235E+38';
	/**
	 * @field
	 * @var \System\Single
	 */
	const MaxValue = '3,4028235E+38';
	/**
	 * @field
	 * @var \System\Single
	 */
	const Epsilon = '1E-45';
	/**
	 * @field
	 * @var \System\Single
	 */
	const NegativeInfinity = '-∞';
	/**
	 * @field
	 * @var \System\Single
	 */
	const PositiveInfinity = '∞';
	/**
	 * @field
	 * @var \System\Single
	 */
	const NaN = 'не число';
	/**
	 * @field
	 * @var \System\Single
	 */
	const NegativeZero = '-0';
	/**
	 * @field
	 * @var \System\Single
	 */
	const E = '2,7182817';
	/**
	 * @field
	 * @var \System\Single
	 */
	const Pi = '3,1415927';
	/**
	 * @field
	 * @var \System\Single
	 */
	const Tau = '6,2831855';
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
	 * @return \System\Boolean|bool
	 */
	public static function IsFinite($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsNaN($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsNegative($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsNegativeInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsNormal($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsPositiveInfinity($f){}
	/**
	 * @param \System\Single $f
	 * @return \System\Boolean|bool
	 */
	public static function IsSubnormal($f){}
	/**
	 * @uses SingleOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses SingleOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Single $left
	 * @param \System\Single $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses SingleOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses SingleOverride::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses SingleOverride::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses SingleOverride::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses SingleOverride::Parse_5 <br>public , args: ($s, $style, $provider)<br>
	 * @uses SingleOverride::Parse_6 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses SingleOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses SingleOverride::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses SingleOverride::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses SingleOverride::TryParse_4 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses SingleOverride::TryParse_5 <br>private , args: ($s, $style, $info, &$result)<br>
	 * @uses SingleOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses SingleOverride::TryParse_7 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode(){}
	private function ToBoolean($provider){}
	private function ToChar($provider){}
	private function ToSByte($provider){}
	private function ToByte($provider){}
	private function ToInt16($provider){}
	private function ToUInt16($provider){}
	private function ToInt32($provider){}
	private function ToUInt32($provider){}
	private function ToInt64($provider){}
	private function ToUInt64($provider){}
	private function ToSingle($provider){}
	private function ToDouble($provider){}
	private function ToDecimal($provider){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
	private static function op_Addition($left, $right){}
	private static function get_AdditiveIdentity(){}
	private static function get_AllBitsSet(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	public static function Log2($value){}
	private static function op_BitwiseAnd($left, $right){}
	private static function op_BitwiseOr($left, $right){}
	private static function op_ExclusiveOr($left, $right){}
	private static function op_OnesComplement($value){}
	private static function op_Decrement($value){}
	private static function op_Division($left, $right){}
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
	 * @uses SingleOverride::Round_1 <br>public , args: ($x)<br>
	 * @uses SingleOverride::Round_2 <br>public , args: ($x, $digits)<br>
	 * @uses SingleOverride::Round_3 <br>public , args: ($x, $mode)<br>
	 * @uses SingleOverride::Round_4 <br>public , args: ($x, $digits, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Round (\override ...$args){}
	/**
	 * @param \System\Single $x
	 * @return \System\Single
	 */
	public static function Truncate($x){}
	private function GetExponentByteCount(){}
	private function GetExponentShortestBitLength(){}
	private function GetSignificandByteCount(){}
	private function GetSignificandBitLength(){}
	private function TryWriteExponentBigEndian($destination, &$bytesWritten){}
	private function TryWriteExponentLittleEndian($destination, &$bytesWritten){}
	private function TryWriteSignificandBigEndian($destination, &$bytesWritten){}
	private function TryWriteSignificandLittleEndian($destination, &$bytesWritten){}
	private static function get_E(){}
	private static function get_Pi(){}
	private static function get_Tau(){}
	private static function get_Epsilon(){}
	private static function get_NaN(){}
	private static function get_NegativeInfinity(){}
	private static function get_NegativeZero(){}
	private static function get_PositiveInfinity(){}
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
	private static function op_Increment($value){}
	/**
	 * @uses SingleOverride::Log_1 <br>public , args: ($x)<br>
	 * @uses SingleOverride::Log_2 <br>public , args: ($x, $newBase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
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
	private static function get_MinValue(){}
	private static function get_MaxValue(){}
	private static function op_Modulus($left, $right){}
	private static function get_MultiplicativeIdentity(){}
	private static function op_Multiply($left, $right){}
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
	private static function get_One(){}
	private static function get_Radix(){}
	private static function get_Zero(){}
	/**
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	public static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Single
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Single
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Single
	 */
	public static function CreateTruncating($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value){}
	private static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInteger($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\Single $value
	 * @return \System\Boolean|bool
	 */
	public static function IsRealNumber($value){}
	private static function IsZero($value){}
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
	private static function TryConvertFromChecked($value, &$result){}
	private static function TryConvertFromSaturating($value, &$result){}
	private static function TryConvertFromTruncating($value, &$result){}
	private static function TryConvertFrom($value, &$result){}
	private static function TryConvertToChecked($value, &$result){}
	private static function TryConvertToSaturating($value, &$result){}
	private static function TryConvertToTruncating($value, &$result){}
	private static function TryConvertTo($value, &$result){}
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
	private static function get_NegativeOne(){}
	private static function op_Subtraction($left, $right){}
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
	 * @return \System\ValueTuple_2[System\Single,System\Single]
	 */
	public static function SinCos($x){}
	/**
	 * @param \System\Single $x
	 * @return \System\ValueTuple_2[System\Single,System\Single]
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
	private static function op_UnaryNegation($value){}
	private static function op_UnaryPlus($value){}
	private static function CosForIntervalPiBy4($x){}
	private static function SinForIntervalPiBy4($x){}
	private static function TanForIntervalPiBy4($x, $isReciprocal){}
}