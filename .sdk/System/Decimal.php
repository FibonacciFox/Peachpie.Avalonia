<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DecimalOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_2 ($s, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_4 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_5 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Parse_6 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Int32
	 */
	#[MethodOverride]public static function GetBits_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\Span_1 $destination [generic: System\Int32]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetBits_2 ($d, $destination){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Byte]
	 * @return \System\Decimal
	 */
	#[MethodOverride]protected static function ToDecimal_1 ($span){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Decimal
	 */
	#[MethodOverride]private function ToDecimal_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\Int32|int $decimals
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_2 ($d, $decimals){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\MidpointRounding $mode
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_3 ($d, $mode){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @param \System\Int32|int $decimals
	 * @param \System\MidpointRounding $mode
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Round_4 ($d, $decimals, $mode){}
	/**
	 * @deprecated
	 * @param \System\Decimal& $d
	 * @param \System\Int32|int $decimals
	 * @param \System\MidpointRounding $mode
	 * @return \System\Decimal
	 */
	#[MethodOverride]private static function Round_5 ($d, $decimals, $mode){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function ToByte_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Byte
	 */
	#[MethodOverride]private function ToByte_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function ToSByte_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\SByte
	 */
	#[MethodOverride]private function ToSByte_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function ToInt16_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int16
	 */
	#[MethodOverride]private function ToInt16_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function ToDouble_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function ToDouble_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ToInt32_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function ToInt32_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function ToInt64_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Int64|int
	 */
	#[MethodOverride]private function ToInt64_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function ToUInt16_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt16
	 */
	#[MethodOverride]private function ToUInt16_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ToUInt32_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt32
	 */
	#[MethodOverride]private function ToUInt32_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function ToUInt64_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt64
	 */
	#[MethodOverride]private function ToUInt64_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Single
	 */
	#[MethodOverride]public static function ToSingle_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\Single
	 */
	#[MethodOverride]private function ToSingle_2 ($provider){}
	/**
	 * @deprecated
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function Truncate_1 ($d){}
	/**
	 * @deprecated
	 * @param \System\Decimal& $d
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function Truncate_2 ($d){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Implicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Decimal
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function op_Explicit_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Char
	 */
	#[MethodOverride]public static function op_Explicit_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function op_Explicit_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function op_Explicit_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function op_Explicit_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function op_Explicit_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function op_Explicit_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function op_Explicit_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Single
	 */
	#[MethodOverride]public static function op_Explicit_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Decimal $value
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function op_Explicit_13 ($value){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \TOther $value
	 * @param \System\Decimal& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertFromChecked_2 ($value, &$result){}
	/**
	 * @param \System\Int32|int $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\UInt32 $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 * @param \System\Int64|int $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\UInt64 $value
	 */
	#[MethodOverride]public function __construct_4 ($value){}
	/**
	 * @param \System\Single $value
	 */
	#[MethodOverride]public function __construct_5 ($value){}
	/**
	 * @param \System\Double|double $value
	 */
	#[MethodOverride]public function __construct_6 ($value){}
	/**
	 * @param \System\Int32 $bits
	 */
	#[MethodOverride]public function __construct_7 ($bits){}
	/**
	 * @param \System\ReadOnlySpan_1 $bits [generic: System\Int32]
	 */
	#[MethodOverride]public function __construct_8 ($bits){}
	/**
	 * @param \System\Int32|int $lo
	 * @param \System\Int32|int $mid
	 * @param \System\Int32|int $hi
	 * @param \System\Boolean|bool $isNegative
	 * @param \System\Byte $scale
	 */
	#[MethodOverride]public function __construct_9 ($lo, $mid, $hi, $isNegative, $scale){}
}
final class Decimal extends \System\ValueType implements
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
	use DecimalOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Decimal
	 */
	public static $Zero;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Decimal
	 */
	public static $One;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Decimal
	 */
	public static $MinusOne;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Decimal
	 */
	public static $MaxValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Decimal
	 */
	public static $MinValue;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Scale;
	private function GetObjectData($info, $context){}
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
	private static function IsValid($flags){}
	private function OnDeserialization($sender){}
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
	 * @uses DecimalOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Divide($d1, $d2){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Decimal
	 */
	public static function Floor($d){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses DecimalOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses DecimalOverride::Parse_2 <br>public , args: ($s, $style)<br>
	 * @uses DecimalOverride::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses DecimalOverride::Parse_4 <br>public , args: ($s, $style, $provider)<br>
	 * @uses DecimalOverride::Parse_5 <br>public , args: ($s, $style, $provider)<br>
	 * @uses DecimalOverride::Parse_6 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses DecimalOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses DecimalOverride::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses DecimalOverride::TryParse_3 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses DecimalOverride::TryParse_4 <br>public , args: ($s, $style, $provider, &$result)<br>
	 * @uses DecimalOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses DecimalOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses DecimalOverride::GetBits_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::GetBits_2 <br>public , args: ($d, $destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetBits (\override ...$args){}
	/**
	 * @param \System\Decimal $d
	 * @param \System\Span_1 $destination [generic: System\Int32]
	 * @param \System\Int32& &$valuesWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryGetBits($d, $destination, &$valuesWritten){}
	/**
	 * @param \System\Decimal& &$d
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected static function GetBytes(&$d, $buffer){}
	/**
	 * @uses DecimalOverride::ToDecimal_1 <br>protected , args: ($span)<br>
	 * @uses DecimalOverride::ToDecimal_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverrideProtected]function ToDecimal (\override ...$args){}
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
	 * @uses DecimalOverride::Round_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::Round_2 <br>public , args: ($d, $decimals)<br>
	 * @uses DecimalOverride::Round_3 <br>public , args: ($d, $mode)<br>
	 * @uses DecimalOverride::Round_4 <br>public , args: ($d, $decimals, $mode)<br>
	 * @uses DecimalOverride::Round_5 <br>private , args: ($d, $decimals, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverridePublic]function Round (\override ...$args){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Decimal
	 */
	public static function Subtract($d1, $d2){}
	/**
	 * @uses DecimalOverride::ToByte_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::ToByte_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function ToByte (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToSByte_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::ToSByte_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\SByte|mixed|\override
	 */
	#[MethodOverridePublic]function ToSByte (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToInt16_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::ToInt16_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int16|mixed|\override
	 */
	#[MethodOverridePublic]function ToInt16 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToDouble_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToDouble_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function ToDouble (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToInt32_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToInt32_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ToInt32 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToInt64_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToInt64_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function ToInt64 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToUInt16_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::ToUInt16_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt16|mixed|\override
	 */
	#[MethodOverridePublic]function ToUInt16 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToUInt32_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToUInt32_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function ToUInt32 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToUInt64_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToUInt64_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function ToUInt64 (\override ...$args){}
	/**
	 * @uses DecimalOverride::ToSingle_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::ToSingle_2 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Single|mixed|\override
	 */
	#[MethodOverridePublic]function ToSingle (\override ...$args){}
	/**
	 * @uses DecimalOverride::Truncate_1 <br>public , args: ($d)<br>
	 * @uses DecimalOverride::Truncate_2 <br>private , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Truncate (\override ...$args){}
	/**
	 * @uses DecimalOverride::op_Implicit_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_2 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_3 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_4 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_5 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_6 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_7 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_8 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Implicit_9 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|mixed|\override
	 */
	#[MethodOverridePublic]function op_Implicit (\override ...$args){}
	/**
	 * @uses DecimalOverride::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_3 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_4 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_5 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_6 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_7 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_8 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_9 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_10 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_11 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_12 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::op_Explicit_13 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Decimal|\System\Byte|\System\SByte|\System\Char|\System\Int16|\System\UInt16|\System\Int32|int|\System\UInt32|\System\Int64|int|\System\UInt64|\System\Single|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
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
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($d1, $d2){}
	/**
	 * @param \System\Decimal $d1
	 * @param \System\Decimal $d2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($d1, $d2){}
	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode(){}
	private function ToBoolean($provider){}
	private function ToChar($provider){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
	private static function get_AdditiveIdentity(){}
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
	private static function get_MinValue(){}
	private static function get_MaxValue(){}
	private static function get_MultiplicativeIdentity(){}
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
	private static function MaxNumber($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function Min($x, $y){}
	private static function MinNumber($x, $y){}
	/**
	 * @param \System\Decimal $d
	 * @return \System\Int32|int
	 */
	public static function Sign($d){}
	private static function get_One(){}
	private static function get_Radix(){}
	private static function get_Zero(){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Decimal
	 */
	public static function Abs($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateChecked($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateSaturating($value){}
	/**
	 * @param \TOther $value
	 * @return \System\Decimal
	 */
	public static function CreateTruncating($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsEvenInteger($value){}
	private static function IsFinite($value){}
	private static function IsImaginaryNumber($value){}
	private static function IsInfinity($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsInteger($value){}
	private static function IsNaN($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNegative($value){}
	private static function IsNegativeInfinity($value){}
	private static function IsNormal($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsOddInteger($value){}
	/**
	 * @param \System\Decimal $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPositive($value){}
	private static function IsPositiveInfinity($value){}
	private static function IsRealNumber($value){}
	private static function IsSubnormal($value){}
	private static function IsZero($value){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function MaxMagnitude($x, $y){}
	private static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Decimal $x
	 * @param \System\Decimal $y
	 * @return \System\Decimal
	 */
	public static function MinMagnitude($x, $y){}
	private static function MinMagnitudeNumber($x, $y){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DecimalOverride::TryConvertFromChecked_1 <br>private , args: ($value, &$result)<br>
	 * @uses DecimalOverride::TryConvertFromChecked_2 <br>private , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryConvertFromChecked (\override ...$args){}
	private static function TryConvertFromSaturating($value, &$result){}
	private static function TryConvertFromTruncating($value, &$result){}
	private static function TryConvertFrom($value, &$result){}
	private static function TryConvertToChecked($value, &$result){}
	private static function TryConvertToSaturating($value, &$result){}
	private static function TryConvertToTruncating($value, &$result){}
	private static function TryConvertTo($value, &$result){}
	private static function get_NegativeOne(){}
	private static function AsMutable($d){}
	/**
	 * @param \System\Decimal& $value
	 * @return \System\UInt32
	 */
	protected static function DecDivMod1E9($value){}
	/**
	 * @uses DecimalOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_2 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_4 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_5 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_6 <br>public , args: ($value)<br>
	 * @uses DecimalOverride::__construct_7 <br>public , args: ($bits)<br>
	 * @uses DecimalOverride::__construct_8 <br>public , args: ($bits)<br>
	 * @uses DecimalOverride::__construct_9 <br>public , args: ($lo, $mid, $hi, $isNegative, $scale)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}