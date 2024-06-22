<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait HalfOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_5 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Parse_6 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Half $other
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($other){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function op_Explicit_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Char
	 */
	#[MethodOverride]public static function op_Explicit_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Explicit_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function op_Explicit_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Explicit_17 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function op_Explicit_18 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int128
	 */
	#[MethodOverride]public static function op_Explicit_19 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function op_Explicit_20 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function op_Explicit_21 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function op_Explicit_22 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_Explicit_23 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_Explicit_24 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_25 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Explicit_26 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function op_Explicit_27 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Single
	 */
	#[MethodOverride]public static function op_Explicit_28 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function op_CheckedExplicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Char
	 */
	#[MethodOverride]public static function op_CheckedExplicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function op_CheckedExplicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_CheckedExplicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function op_CheckedExplicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\Int128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function op_CheckedExplicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function op_CheckedExplicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function op_CheckedExplicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_CheckedExplicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_CheckedExplicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_CheckedExplicit_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Implicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Implicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $i
	 * @param \System\Int32|int $dist
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function ShiftRightJam_1 ($i, $dist){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $l
	 * @param \System\Int32|int $dist
	 * @return \System\UInt64
	 */
	#[MethodOverride]private static function ShiftRightJam_2 ($l, $dist){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Round_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @param \System\Int32|int $digits
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Round_2 ($x, $digits){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @param \System\MidpointRounding $mode
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Round_3 ($x, $mode){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @param \System\Int32|int $digits
	 * @param \System\MidpointRounding $mode
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Round_4 ($x, $digits, $mode){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Log_1 ($x){}
	/**
	 * @deprecated
	 * @param \System\Half $x
	 * @param \System\Half $newBase
	 * @return \System\Half
	 */
	#[MethodOverride]public static function Log_2 ($x, $newBase){}
}
final class Half extends \System\ValueType implements
	\System\IComparable,
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
	use HalfOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt16
	 */
	protected $_value;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $Epsilon;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $PositiveInfinity;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $NegativeInfinity;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $NaN;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $MinValue;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $MaxValue;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $E;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $Pi;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $Tau;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $NegativeZero;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $MultiplicativeIdentity;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $One;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \System\Half
	 * @since readonly
	 */
	public $NegativeOne;
	/**
	 * @param \System\UInt16 $bits
	 * @return \System\Byte
	 */
	protected static function ExtractBiasedExponentFromBits($bits){}
	/**
	 * @param \System\UInt16 $bits
	 * @return \System\UInt16
	 */
	protected static function ExtractTrailingSignificandFromBits($bits){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsFinite($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInfinity($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNaN($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegative($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegativeInfinity($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNormal($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositiveInfinity($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsSubnormal($value){}
	/**
	 * @uses HalfOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses HalfOverride::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses HalfOverride::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses HalfOverride::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses HalfOverride::Parse_5 <br>public , args: ($s, $style, $provider)<br>
	 * @uses HalfOverride::Parse_6 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Half|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses HalfOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses HalfOverride::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses HalfOverride::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses HalfOverride::TryParse_4 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses HalfOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses HalfOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function AreZero($left, $right){}
	private static function IsNaNOrZero($value){}
	private static function StripSign($value){}
	/**
	 * @uses HalfOverride::CompareTo_1 <br>public , args: ($obj)<br>
	 * @uses HalfOverride::CompareTo_2 <br>public , args: ($other)<br>
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
	 * @uses HalfOverride::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_3 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_4 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_5 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_6 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_7 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_8 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_9 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_10 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_11 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_12 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_13 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_14 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_15 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_16 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_17 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_18 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_19 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_20 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_21 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_22 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_23 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_24 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_25 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_26 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_27 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Explicit_28 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Half|\System\Byte|\System\Char|\System\Decimal|\System\Int16|\System\Int32|int|\System\Int64|int|\System\Int128|\System\IntPtr|\System\SByte|\System\UInt16|\System\UInt32|\System\UInt64|\System\UInt128|\System\UIntPtr|\System\Double|double|\System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	/**
	 * @uses HalfOverride::op_CheckedExplicit_1 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_2 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_3 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_4 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_5 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_6 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_7 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_8 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_9 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_10 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_11 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_12 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_CheckedExplicit_13 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Char|\System\Int16|\System\Int32|int|\System\Int64|int|\System\Int128|\System\IntPtr|\System\SByte|\System\UInt16|\System\UInt32|\System\UInt64|\System\UInt128|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function op_CheckedExplicit (\override ...$args){}
	/**
	 * @uses HalfOverride::op_Implicit_1 <br>public , args: ($value)<br>
	 * @uses HalfOverride::op_Implicit_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Half|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	protected static function Negate($value){}
	private static function NormSubnormalF16Sig($sig){}
	private static function CreateHalfNaN($sign, $significand){}
	private static function RoundPackToHalf($sign, $exp, $sig){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses HalfOverride::ShiftRightJam_1 <br>private , args: ($i, $dist)<br>
	 * @uses HalfOverride::ShiftRightJam_2 <br>private , args: ($l, $dist)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePrivate]function ShiftRightJam (\override ...$args){}
	private static function CreateSingleNaN($sign, $significand){}
	private static function CreateDoubleNaN($sign, $significand){}
	private static function CreateSingle($sign, $exp, $sig){}
	private static function CreateDouble($sign, $exp, $sig){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function op_Addition($left, $right){}
	private static function get_AdditiveIdentity(){}
	private static function get_AllBitsSet(){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function Log2($value){}
	private static function op_BitwiseAnd($left, $right){}
	private static function op_BitwiseOr($left, $right){}
	private static function op_ExclusiveOr($left, $right){}
	private static function op_OnesComplement($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function op_Decrement($value){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Exp($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function ExpM1($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Exp2($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Exp2M1($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Exp10($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Exp10M1($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Ceiling($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Floor($x){}
	/**
	 * @uses HalfOverride::Round_1 <br>public , args: ($x)<br>
	 * @uses HalfOverride::Round_2 <br>public , args: ($x, $digits)<br>
	 * @uses HalfOverride::Round_3 <br>public , args: ($x, $mode)<br>
	 * @uses HalfOverride::Round_4 <br>public , args: ($x, $digits, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Half|mixed|\override
	 */
	#[MethodOverridePublic]function Round (\override ...$args){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
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
	/**
	 * @param \System\Half $y
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Atan2($y, $x){}
	/**
	 * @param \System\Half $y
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Atan2Pi($y, $x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function BitDecrement($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function BitIncrement($x){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @param \System\Half $addend
	 * @return \System\Half
	 */
	public static function FusedMultiplyAdd($left, $right, $addend){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function Ieee754Remainder($left, $right){}
	/**
	 * @param \System\Half $x
	 * @return \System\Int32|int
	 */
	public static function ILogB($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function ReciprocalEstimate($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function ReciprocalSqrtEstimate($x){}
	/**
	 * @param \System\Half $x
	 * @param \System\Int32|int $n
	 * @return \System\Half
	 */
	public static function ScaleB($x, $n){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Acosh($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Asinh($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Atanh($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Cosh($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Sinh($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Tanh($x){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function op_Increment($value){}
	/**
	 * @uses HalfOverride::Log_1 <br>public , args: ($x)<br>
	 * @uses HalfOverride::Log_2 <br>public , args: ($x, $newBase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Half|mixed|\override
	 */
	#[MethodOverridePublic]function Log (\override ...$args){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Log10($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function LogP1($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Log2P1($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Log10P1($x){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function op_Modulus($left, $right){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function op_Multiply($left, $right){}
	/**
	 * @param \System\Half $value
	 * @param \System\Half $min
	 * @param \System\Half $max
	 * @return \System\Half
	 */
	public static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Half $value
	 * @param \System\Half $sign
	 * @return \System\Half
	 */
	public static function CopySign($value, $sign){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function Max($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function MaxNumber($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function Min($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function MinNumber($x, $y){}
	/**
	 * @param \System\Half $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
	private static function get_Radix(){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Half
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Half
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Half
	 */
	public static function CreateTruncating($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value){}
	private static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInteger($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositive($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Boolean|bool
	 */
	public static function IsRealNumber($value){}
	private static function IsZero($value){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
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
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function Pow($x, $y){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Cbrt($x){}
	/**
	 * @param \System\Half $x
	 * @param \System\Half $y
	 * @return \System\Half
	 */
	public static function Hypot($x, $y){}
	/**
	 * @param \System\Half $x
	 * @param \System\Int32|int $n
	 * @return \System\Half
	 */
	public static function RootN($x, $n){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Sqrt($x){}
	/**
	 * @param \System\Half $left
	 * @param \System\Half $right
	 * @return \System\Half
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Acos($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function AcosPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Asin($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function AsinPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Atan($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function AtanPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Cos($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function CosPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Sin($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\ValueTuple_2[System\Half,System\Half]
	 */
	public static function SinCos($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\ValueTuple_2[System\Half,System\Half]
	 */
	public static function SinCosPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function SinPi($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function Tan($x){}
	/**
	 * @param \System\Half $x
	 * @return \System\Half
	 */
	public static function TanPi($x){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\Half $value
	 * @return \System\Half
	 */
	public static function op_UnaryPlus($value){}
}