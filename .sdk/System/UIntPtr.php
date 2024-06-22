<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UIntPtrOverride {
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Void* $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function op_Explicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_Explicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_Explicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Addition_1 ($pointer, $offset){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function op_Addition_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Subtraction_1 ($pointer, $offset){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function op_Subtraction_2 ($left, $right){}
	/**
	 * @deprecated
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function get_MaxValue_1 (){}
	/**
	 * @deprecated
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function get_MaxValue_2 (){}
	/**
	 * @deprecated
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function get_MinValue_1 (){}
	/**
	 * @deprecated
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function get_MinValue_2 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Parse_6 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UIntPtr& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_2 ($value, &$result){}
	/**
	 * @param \System\UInt32 $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\UInt64 $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 * @param \System\Void* $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
}
final class UIntPtr extends \System\ValueType implements
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
	use UIntPtrOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\UIntPtr
	 */
	public static $Zero;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\UIntPtr
	 * @since readonly
	 */
	public $MaxValue;
	/**
	 * @property
	 * @var \System\UIntPtr
	 * @since readonly
	 */
	public $MinValue;
	private function GetObjectData($info, $context){}
	/**
	 * @return \System\UInt32
	 */
	public function ToUInt32(){}
	/**
	 * @return \System\UInt64
	 */
	public function ToUInt64(){}
	/**
	 * @uses UIntPtrOverride::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::op_Explicit_3 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::op_Explicit_4 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::op_Explicit_5 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::op_Explicit_6 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|\System\Void*|\System\UInt32|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	/**
	 * @param \System\UIntPtr $value1
	 * @param \System\UIntPtr $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($value1, $value2){}
	/**
	 * @param \System\UIntPtr $value1
	 * @param \System\UIntPtr $value2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($value1, $value2){}
	/**
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	public static function Add($pointer, $offset){}
	/**
	 * @uses UIntPtrOverride::op_Addition_1 <br>public , args: ($pointer, $offset)<br>
	 * @uses UIntPtrOverride::op_Addition_2 <br>private , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function op_Addition (\override ...$args){}
	/**
	 * @param \System\UIntPtr $pointer
	 * @param \System\Int32|int $offset
	 * @return \System\UIntPtr
	 */
	public static function Subtract($pointer, $offset){}
	/**
	 * @uses UIntPtrOverride::op_Subtraction_1 <br>public , args: ($pointer, $offset)<br>
	 * @uses UIntPtrOverride::op_Subtraction_2 <br>private , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function op_Subtraction (\override ...$args){}
	/**
	 * @return \System\Void*
	 */
	public function ToPointer(){}
	/**
	 * @uses UIntPtrOverride::get_MaxValue_1 <br>public , args: ()<br>
	 * @uses UIntPtrOverride::get_MaxValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function get_MaxValue (){}
	/**
	 * @uses UIntPtrOverride::get_MinValue_1 <br>public , args: ()<br>
	 * @uses UIntPtrOverride::get_MinValue_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function get_MinValue (){}
	/**
	 * @uses UIntPtrOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::CompareTo_2 <br>public , args: ($value)<br>
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
	 * @uses UIntPtrOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses UIntPtrOverride::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses UIntPtrOverride::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses UIntPtrOverride::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses UIntPtrOverride::Parse_5 <br>public , args: ($s, $provider)<br>
	 * @uses UIntPtrOverride::Parse_6 <br>public , args: ($s, $style, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses UIntPtrOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses UIntPtrOverride::TryParse_2 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses UIntPtrOverride::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses UIntPtrOverride::TryParse_4 <br>public , args: ($s, &$result)<br>
	 * @uses UIntPtrOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses UIntPtrOverride::TryParse_6 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function op_CheckedAddition($left, $right){}
	private static function get_AdditiveIdentity(){}
	/**
	 * @param \System\UIntPtr $left
	 * @param \System\UIntPtr $right
	 * @return \System\ValueTuple_2[System\UIntPtr,System\UIntPtr]
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
	private static function TryReadBigEndian($source, $isUnsigned, &$value){}
	private static function TryReadLittleEndian($source, $isUnsigned, &$value){}
	private function GetShortestBitLength(){}
	private function GetByteCount(){}
	private function TryWriteBigEndian($destination, &$bytesWritten){}
	private function TryWriteLittleEndian($destination, &$bytesWritten){}
	private static function get_AllBitsSet(){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
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
	private static function op_Increment($value){}
	private static function op_CheckedIncrement($value){}
	private static function op_Modulus($left, $right){}
	private static function get_MultiplicativeIdentity(){}
	private static function op_Multiply($left, $right){}
	private static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\UIntPtr $value
	 * @param \System\UIntPtr $min
	 * @param \System\UIntPtr $max
	 * @return \System\UIntPtr
	 */
	public static function Clamp($value, $min, $max){}
	private static function CopySign($value, $sign){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @return \System\UIntPtr
	 */
	public static function Max($x, $y){}
	private static function MaxNumber($x, $y){}
	/**
	 * @param \System\UIntPtr $x
	 * @param \System\UIntPtr $y
	 * @return \System\UIntPtr
	 */
	public static function Min($x, $y){}
	private static function MinNumber($x, $y){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
	private static function get_One(){}
	private static function get_Radix(){}
	private static function get_Zero(){}
	private static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UIntPtr
	 */
	public static function CreateTruncating($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value){}
	private static function IsFinite($value){}
	private static function IsImaginaryNumber($value){}
	private static function IsInfinity($value){}
	private static function IsInteger($value){}
	private static function IsNaN($value){}
	private static function IsNegative($value){}
	private static function IsNegativeInfinity($value){}
	private static function IsNormal($value){}
	/**
	 * @param \System\UIntPtr $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value){}
	private static function IsPositive($value){}
	private static function IsPositiveInfinity($value){}
	private static function IsRealNumber($value){}
	private static function IsSubnormal($value){}
	private static function IsZero($value){}
	private static function MaxMagnitude($x, $y){}
	private static function MaxMagnitudeNumber($x, $y){}
	private static function MinMagnitude($x, $y){}
	private static function MinMagnitudeNumber($x, $y){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UIntPtrOverride::TryConvertFromChecked_1 <br>private , args: ($value, &$result)<br>
	 * @uses UIntPtrOverride::TryConvertFromChecked_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromChecked (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UIntPtrOverride::TryConvertFromSaturating_1 <br>private , args: ($value, &$result)<br>
	 * @uses UIntPtrOverride::TryConvertFromSaturating_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromSaturating (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UIntPtrOverride::TryConvertFromTruncating_1 <br>private , args: ($value, &$result)<br>
	 * @uses UIntPtrOverride::TryConvertFromTruncating_2 <br>private , args: ($value, &$result)<br>
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
	private static function op_CheckedSubtraction($left, $right){}
	private static function op_UnaryNegation($value){}
	private static function op_CheckedUnaryNegation($value){}
	private static function op_UnaryPlus($value){}
	/**
	 * @uses UIntPtrOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::__construct_2 <br>public , args: ($value)<br>
	 * @uses UIntPtrOverride::__construct_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}