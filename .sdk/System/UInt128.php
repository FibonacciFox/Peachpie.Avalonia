<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UInt128Override {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_5 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function Parse_6 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Char
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function op_Explicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Half
	 */
	#[MethodOverride]public static function op_Explicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function op_Explicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Explicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function op_Explicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int128
	 */
	#[MethodOverride]public static function op_Explicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function op_Explicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function op_Explicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Single
	 */
	#[MethodOverride]public static function op_Explicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function op_Explicit_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_Explicit_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_Explicit_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_Explicit_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_17 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_18 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_19 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_20 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_21 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_22 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_23 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Explicit_24 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function op_CheckedExplicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Char
	 */
	#[MethodOverride]public static function op_CheckedExplicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function op_CheckedExplicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_CheckedExplicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function op_CheckedExplicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function op_CheckedExplicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function op_CheckedExplicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function op_CheckedExplicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_CheckedExplicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_CheckedExplicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function op_CheckedExplicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_13 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_14 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_15 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_16 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_17 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_18 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_CheckedExplicit_19 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\UInt128
	 */
	#[MethodOverride]public static function op_Implicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromSaturating_2 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\UInt128& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromTruncating_2 ($value, &$result){}
}
final class UInt128 extends \System\ValueType implements
	\System\Numerics\IBinaryInteger_1,
	\System\Numerics\IBinaryNumber_1,
	\System\Numerics\IBitwiseOperators_3,
	\System\Numerics\INumber_1,
	\System\IComparable,
	\System\IComparable_1,
	\System\Numerics\IComparisonOperators_3,
	\System\Numerics\IEqualityOperators_3,
	\System\Numerics\IModulusOperators_3,
	\System\Numerics\INumberBase_1,
	\System\Numerics\IAdditionOperators_3,
	\System\Numerics\IAdditiveIdentity_2,
	\System\Numerics\IDecrementOperators_1,
	\System\Numerics\IDivisionOperators_3,
	\System\IEquatable_1,
	\System\Numerics\IIncrementOperators_1,
	\System\Numerics\IMultiplicativeIdentity_2,
	\System\Numerics\IMultiplyOperators_3,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1,
	\System\Numerics\ISubtractionOperators_3,
	\System\Numerics\IUnaryPlusOperators_2,
	\System\Numerics\IUnaryNegationOperators_2,
	\System\Numerics\IShiftOperators_3,
	\System\Numerics\IMinMaxValue_1,
	\System\Numerics\IUnsignedNumber_1
{
	use UInt128Override;
	/**
	 * @property
	 * @var \System\UInt128
	 * @since readonly
	 */
	public $MinValue;
	/**
	 * @property
	 * @var \System\UInt128
	 * @since readonly
	 */
	public $MaxValue;
	/**
	 * @property
	 * @var \System\UInt128
	 * @since readonly
	 */
	public $One;
	/**
	 * @property
	 * @var \System\UInt128
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @uses UInt128Override::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses UInt128Override::CompareTo_2 <br>public , args: ($value)<br>
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
	 * @uses UInt128Override::Parse_1 <br>public , args: ($s)<br>
	 * @uses UInt128Override::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses UInt128Override::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses UInt128Override::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses UInt128Override::Parse_5 <br>public , args: ($s, $style, $provider)<br>
	 * @uses UInt128Override::Parse_6 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt128|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses UInt128Override::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses UInt128Override::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses UInt128Override::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses UInt128Override::TryParse_4 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses UInt128Override::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses UInt128Override::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses UInt128Override::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_3 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_4 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_5 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_6 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_7 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_8 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_9 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_10 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_11 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_12 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_13 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_14 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_15 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_16 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_17 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_18 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_19 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_20 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_21 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_22 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_23 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Explicit_24 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Char|\System\Decimal|\System\Double|double|\System\Half|\System\Int16|\System\Int32|int|\System\Int64|int|\System\Int128|\System\IntPtr|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|\System\UInt128|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	/**
	 * @uses UInt128Override::op_CheckedExplicit_1 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_2 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_3 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_4 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_5 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_6 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_7 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_8 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_9 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_10 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_11 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_12 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_13 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_14 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_15 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_16 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_17 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_18 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_CheckedExplicit_19 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Char|\System\Int16|\System\Int32|int|\System\Int64|int|\System\Int128|\System\IntPtr|\System\SByte|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|\System\UInt128|mixed|\override
	 */
	#[MethodOverridePublic]function op_CheckedExplicit (\override ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\UInt128
	 */
	protected static function ToUInt128($value){}
	/**
	 * @uses UInt128Override::op_Implicit_1 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Implicit_2 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Implicit_3 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Implicit_4 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Implicit_5 <br>public , args: ($value)<br>
	 * @uses UInt128Override::op_Implicit_6 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt128|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	private function WriteLittleEndianUnsafe($destination){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_CheckedAddition($left, $right){}
	private static function get_AdditiveIdentity(){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\ValueTuple_2[System\UInt128,System\UInt128]
	 */
	public static function DivRem($left, $right){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function LeadingZeroCount($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function PopCount($value){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\UInt128
	 */
	public static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $rotateAmount
	 * @return \System\UInt128
	 */
	public static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
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
	 * @param \System\UInt128 $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPow2($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function Log2($value){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_OnesComplement($value){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_Decrement($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_CheckedDecrement($value){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_CheckedDivision($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_Increment($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_CheckedIncrement($value){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_Modulus($left, $right){}
	private static function get_MultiplicativeIdentity(){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_Multiply($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_CheckedMultiply($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @param \System\UInt128& &$lower
	 * @return \System\UInt128
	 */
	protected static function BigMul($left, $right, &$lower){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\UInt128 $min
	 * @param \System\UInt128 $max
	 * @return \System\UInt128
	 */
	public static function Clamp($value, $min, $max){}
	private static function CopySign($value, $sign){}
	/**
	 * @param \System\UInt128 $x
	 * @param \System\UInt128 $y
	 * @return \System\UInt128
	 */
	public static function Max($x, $y){}
	private static function MaxNumber($x, $y){}
	/**
	 * @param \System\UInt128 $x
	 * @param \System\UInt128 $y
	 * @return \System\UInt128
	 */
	public static function Min($x, $y){}
	private static function MinNumber($x, $y){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	public static function Sign($value){}
	private static function get_Radix(){}
	private static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UInt128
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UInt128
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\UInt128
	 */
	public static function CreateTruncating($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\UInt128 $value
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
	 * @param \System\UInt128 $value
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
	 * @uses UInt128Override::TryConvertFromChecked_1 <br>private , args: ($value, &$result)<br>
	 * @uses UInt128Override::TryConvertFromChecked_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromChecked (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UInt128Override::TryConvertFromSaturating_1 <br>private , args: ($value, &$result)<br>
	 * @uses UInt128Override::TryConvertFromSaturating_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromSaturating (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UInt128Override::TryConvertFromTruncating_1 <br>private , args: ($value, &$result)<br>
	 * @uses UInt128Override::TryConvertFromTruncating_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromTruncating (\override ...$args){}
	private static function TryConvertToChecked($value, &$result){}
	private static function TryConvertToSaturating($value, &$result){}
	private static function TryConvertToTruncating($value, &$result){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $shiftAmount
	 * @return \System\UInt128
	 */
	public static function op_LeftShift($value, $shiftAmount){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $shiftAmount
	 * @return \System\UInt128
	 */
	public static function op_RightShift($value, $shiftAmount){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $shiftAmount
	 * @return \System\UInt128
	 */
	public static function op_UnsignedRightShift($value, $shiftAmount){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\UInt128 $left
	 * @param \System\UInt128 $right
	 * @return \System\UInt128
	 */
	public static function op_CheckedSubtraction($left, $right){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_UnaryNegation($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_CheckedUnaryNegation($value){}
	/**
	 * @param \System\UInt128 $value
	 * @return \System\UInt128
	 */
	public static function op_UnaryPlus($value){}
	/**
	 * @param \System\UInt64 $upper
	 * @param \System\UInt64 $lower
	 */
	public function __construct($upper, $lower){}
}