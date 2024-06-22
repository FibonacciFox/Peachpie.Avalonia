<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Int64Override {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_5 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Parse_6 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Int64& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_2 ($value, &$result){}
}
final class Int64 extends \System\ValueType implements
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
	use Int64Override;

	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const MaxValue = '9223372036854775807';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const MinValue = '-9223372036854775808';
	/**
	 * @uses Int64Override::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses Int64Override::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses Int64Override::Parse_1 <br>public , args: ($s)<br>
	 * @uses Int64Override::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses Int64Override::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses Int64Override::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses Int64Override::Parse_5 <br>public , args: ($s, $style, $provider)<br>
	 * @uses Int64Override::Parse_6 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses Int64Override::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses Int64Override::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses Int64Override::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses Int64Override::TryParse_4 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses Int64Override::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses Int64Override::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
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
	private static function op_CheckedAddition($left, $right){}
	private static function get_AdditiveIdentity(){}
	/**
	 * @param \System\Int64|int $left
	 * @param \System\Int64|int $right
	 * @return \System\ValueTuple_2[System\Int64,System\Int64]
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	public static function PopCount($value){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\Int64|int
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\Int64|int
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	public static function TrailingZeroCount($value){}
	private static function TryReadBigEndian($source, $isUnsigned, &$value){}
	private static function TryReadLittleEndian($source, $isUnsigned, &$value){}
	private function GetShortestBitLength(){}
	private function GetByteCount(){}
	private function TryWriteBigEndian($destination, &$bytesWritten){}
	private function TryWriteLittleEndian($destination, &$bytesWritten){}
	private static function get_AllBitsSet(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	public static function Log2($value){}
	private static function op_BitwiseAnd($left, $right){}
	private static function op_BitwiseOr($left, $right){}
	private static function op_ExclusiveOr($left, $right){}
	private static function op_OnesComplement($value){}
	private static function op_LessThan($left, $right){}
	private static function op_LessThanOrEqual($left, $right){}
	private static function op_GreaterThan($left, $right){}
	private static function op_GreaterThanOrEqual($left, $right){}
	private static function op_Decrement($value){}
	private static function op_CheckedDecrement($value){}
	private static function op_Division($left, $right){}
	private static function op_Equality($left, $right){}
	private static function op_Inequality($left, $right){}
	private static function op_Increment($value){}
	private static function op_CheckedIncrement($value){}
	private static function get_MinValue(){}
	private static function get_MaxValue(){}
	private static function op_Modulus($left, $right){}
	private static function get_MultiplicativeIdentity(){}
	private static function op_Multiply($left, $right){}
	private static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int64|int $min
	 * @param \System\Int64|int $max
	 * @return \System\Int64|int
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int64|int $sign
	 * @return \System\Int64|int
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\Int64|int $x
	 * @param \System\Int64|int $y
	 * @return \System\Int64|int
	 */
	public static function Max($x, $y){}
	private static function MaxNumber($x, $y){}
	/**
	 * @param \System\Int64|int $x
	 * @param \System\Int64|int $y
	 * @return \System\Int64|int
	 */
	public static function Min($x, $y){}
	private static function MinNumber($x, $y){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
	private static function get_One(){}
	private static function get_Radix(){}
	private static function get_Zero(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	public static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Int64|int
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Int64|int
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Int64|int
	 */
	public static function CreateTruncating($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value){}
	private static function IsFinite($value){}
	private static function IsImaginaryNumber($value){}
	private static function IsInfinity($value){}
	private static function IsInteger($value){}
	private static function IsNaN($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegative($value){}
	private static function IsNegativeInfinity($value){}
	private static function IsNormal($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositive($value){}
	private static function IsPositiveInfinity($value){}
	private static function IsRealNumber($value){}
	private static function IsSubnormal($value){}
	private static function IsZero($value){}
	/**
	 * @param \System\Int64|int $x
	 * @param \System\Int64|int $y
	 * @return \System\Int64|int
	 */
	public static function MaxMagnitude($x, $y){}
	private static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Int64|int $x
	 * @param \System\Int64|int $y
	 * @return \System\Int64|int
	 */
	public static function MinMagnitude($x, $y){}
	private static function MinMagnitudeNumber($x, $y){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Int64Override::TryConvertFromChecked_1 <br>private , args: ($value, &$result)<br>
	 * @uses Int64Override::TryConvertFromChecked_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromChecked (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Int64Override::TryConvertFromSaturating_1 <br>private , args: ($value, &$result)<br>
	 * @uses Int64Override::TryConvertFromSaturating_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromSaturating (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Int64Override::TryConvertFromTruncating_1 <br>private , args: ($value, &$result)<br>
	 * @uses Int64Override::TryConvertFromTruncating_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromTruncating (\override ...$args){}
	private static function TryConvertToChecked($value, &$result){}
	private static function TryConvertToSaturating($value, &$result){}
	private static function TryConvertToTruncating($value, &$result){}
	private static function op_LeftShift($value, $shiftAmount){}
	private static function op_RightShift($value, $shiftAmount){}
	private static function op_UnsignedRightShift($value, $shiftAmount){}
	private static function get_NegativeOne(){}
	private static function op_Subtraction($left, $right){}
	private static function op_CheckedSubtraction($left, $right){}
	private static function op_UnaryNegation($value){}
	private static function op_CheckedUnaryNegation($value){}
	private static function op_UnaryPlus($value){}
}