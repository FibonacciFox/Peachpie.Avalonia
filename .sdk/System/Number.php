<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NumberOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\String|string $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function FormatDouble_1 ($value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Double|double $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function FormatDouble_2 ($sb, $value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @param \System\String|string $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function FormatSingle_1 ($value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Single $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function FormatSingle_2 ($sb, $value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @param \System\String|string $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function FormatHalf_1 ($value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Half $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function FormatHalf_2 ($sb, $value, $format, $info){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bufferEnd
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Byte*
	 */
	#[MethodOverride]protected static function UInt32ToDecChars_1 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt32 $value
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt32ToDecChars_2 ($bufferEnd, $value){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt32ToDecChars_3 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function UInt32ToDecStr_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $digits
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function UInt32ToDecStr_2 ($value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bufferEnd
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Byte*
	 */
	#[MethodOverride]protected static function UInt64ToDecChars_1 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt64 $value
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt64ToDecChars_2 ($bufferEnd, $value){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt64ToDecChars_3 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function UInt64ToDecStr_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $digits
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function UInt64ToDecStr_2 ($value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bufferEnd
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Byte*
	 */
	#[MethodOverride]protected static function UInt128ToDecChars_1 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt128 $value
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt128ToDecChars_2 ($bufferEnd, $value){}
	/**
	 * @deprecated
	 * @param \System\Char* $bufferEnd
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $digits
	 * @return \System\Char*
	 */
	#[MethodOverride]protected static function UInt128ToDecChars_3 ($bufferEnd, $value, $digits){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function UInt128ToDecStr_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $digits
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function UInt128ToDecStr_2 ($value, $digits){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Int32& &$exponent
	 * @return \System\UInt64
	 */
	#[MethodOverride]private static function ExtractFractionAndBiasedExponent_1 ($value, &$exponent){}
	/**
	 * @deprecated
	 * @param \System\Half $value
	 * @param \System\Int32& &$exponent
	 * @return \System\UInt16
	 */
	#[MethodOverride]private static function ExtractFractionAndBiasedExponent_2 ($value, &$exponent){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @param \System\Int32& &$exponent
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function ExtractFractionAndBiasedExponent_3 ($value, &$exponent){}
}
class Number extends \System\Object
{
	use NumberOverride;

	/**
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean|bool $isSignificantDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Double($value, $cutoffNumber, $isSignificantDigits, $number){}
	/**
	 * @param \System\Half $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean|bool $isSignificantDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Half($value, $cutoffNumber, $isSignificantDigits, $number){}
	/**
	 * @param \System\Single $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean|bool $isSignificantDigits
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Single($value, $cutoffNumber, $isSignificantDigits, $number){}
	private static function Dragon4($mantissa, $exponent, $mantissaHighBitIdx, $hasUnequalMargins, $cutoffNumber, $isSignificantDigits, $buffer, &$decimalExponent){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	public static function FormatDecimal($value, $format, $info){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatDecimal($value, $format, $info, $destination, &$charsWritten){}
	/**
	 * @param \System\Decimal& $d
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Void|void
	 */
	protected static function DecimalToNumber($d, $number){}
	/**
	 * @uses NumberOverride::FormatDouble_1 <br>public , args: ($value, $format, $info)<br>
	 * @uses NumberOverride::FormatDouble_2 <br>private , args: ($sb, $value, $format, $info)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function FormatDouble (\override ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatDouble($value, $format, $info, $destination, &$charsWritten){}
	private static function GetFloatingPointMaxDigitsAndPrecision($fmt, $precision, $info, &$isSignificantDigits){}
	/**
	 * @uses NumberOverride::FormatSingle_1 <br>public , args: ($value, $format, $info)<br>
	 * @uses NumberOverride::FormatSingle_2 <br>private , args: ($sb, $value, $format, $info)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function FormatSingle (\override ...$args){}
	/**
	 * @param \System\Single $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatSingle($value, $format, $info, $destination, &$charsWritten){}
	/**
	 * @uses NumberOverride::FormatHalf_1 <br>public , args: ($value, $format, $info)<br>
	 * @uses NumberOverride::FormatHalf_2 <br>private , args: ($sb, $value, $format, $info)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function FormatHalf (\override ...$args){}
	/**
	 * @param \System\Half $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatHalf($value, $format, $info, $destination, &$charsWritten){}
	private static function TryCopyTo($source, $destination, &$charsWritten){}
	private static function GetHexBase($fmt){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $hexMask
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatInt32($value, $hexMask, $format, $provider){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $hexMask
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatInt32($value, $hexMask, $format, $provider, $destination, &$charsWritten){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt32($value, $format, $provider){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatUInt32($value, $format, $provider, $destination, &$charsWritten){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatInt64($value, $format, $provider){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatInt64($value, $format, $provider, $destination, &$charsWritten){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt64($value, $format, $provider){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatUInt64($value, $format, $provider, $destination, &$charsWritten){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatInt128($value, $format, $provider){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatInt128($value, $format, $provider, $destination, &$charsWritten){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt128($value, $format, $provider){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatUInt128($value, $format, $provider, $destination, &$charsWritten){}
	private static function Int32ToNumber($value, $number){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\String|string
	 */
	public static function Int32ToDecStr($value){}
	private static function NegativeInt32ToDecStr($value, $digits, $sNegative){}
	private static function TryNegativeInt32ToDecStr($value, $digits, $sNegative, $destination, &$charsWritten){}
	private static function Int32ToHexStr($value, $hexBase, $digits){}
	private static function TryInt32ToHexStr($value, $hexBase, $digits, $destination, &$charsWritten){}
	private static function Int32ToHexChars($buffer, $value, $hexBase, $digits){}
	private static function UInt32ToNumber($value, $number){}
	/**
	 * @uses NumberOverride::UInt32ToDecChars_1 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @uses NumberOverride::UInt32ToDecChars_2 <br>protected , args: ($bufferEnd, $value)<br>
	 * @uses NumberOverride::UInt32ToDecChars_3 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte*|\System\Char*|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt32ToDecChars (\override ...$args){}
	/**
	 * @uses NumberOverride::UInt32ToDecStr_1 <br>protected , args: ($value)<br>
	 * @uses NumberOverride::UInt32ToDecStr_2 <br>private , args: ($value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt32ToDecStr (\override ...$args){}
	private static function TryUInt32ToDecStr($value, $digits, $destination, &$charsWritten){}
	private static function Int64ToNumber($value, $number){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\String|string
	 */
	public static function Int64ToDecStr($value){}
	private static function NegativeInt64ToDecStr($value, $digits, $sNegative){}
	private static function TryNegativeInt64ToDecStr($value, $digits, $sNegative, $destination, &$charsWritten){}
	private static function Int64ToHexStr($value, $hexBase, $digits){}
	private static function TryInt64ToHexStr($value, $hexBase, $digits, $destination, &$charsWritten){}
	private static function Int64ToHexChars($buffer, $value, $hexBase, $digits){}
	private static function UInt64ToNumber($value, $number){}
	/**
	 * @uses NumberOverride::UInt64ToDecChars_1 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @uses NumberOverride::UInt64ToDecChars_2 <br>protected , args: ($bufferEnd, $value)<br>
	 * @uses NumberOverride::UInt64ToDecChars_3 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte*|\System\Char*|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt64ToDecChars (\override ...$args){}
	/**
	 * @uses NumberOverride::UInt64ToDecStr_1 <br>protected , args: ($value)<br>
	 * @uses NumberOverride::UInt64ToDecStr_2 <br>protected , args: ($value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt64ToDecStr (\override ...$args){}
	private static function TryUInt64ToDecStr($value, $digits, $destination, &$charsWritten){}
	private static function Int128ToNumber($value, $number){}
	/**
	 * @param \System\Int128 $value
	 * @return \System\String|string
	 */
	public static function Int128ToDecStr($value){}
	private static function NegativeInt128ToDecStr($value, $digits, $sNegative){}
	private static function TryNegativeInt128ToDecStr($value, $digits, $sNegative, $destination, &$charsWritten){}
	private static function Int128ToHexStr($value, $hexBase, $digits){}
	private static function TryInt128ToHexStr($value, $hexBase, $digits, $destination, &$charsWritten){}
	private static function Int128ToHexChars($buffer, $value, $hexBase, $digits){}
	private static function UInt128ToNumber($value, $number){}
	private static function Int128DivMod1E19($value){}
	/**
	 * @uses NumberOverride::UInt128ToDecChars_1 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @uses NumberOverride::UInt128ToDecChars_2 <br>protected , args: ($bufferEnd, $value)<br>
	 * @uses NumberOverride::UInt128ToDecChars_3 <br>protected , args: ($bufferEnd, $value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte*|\System\Char*|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt128ToDecChars (\override ...$args){}
	/**
	 * @uses NumberOverride::UInt128ToDecStr_1 <br>protected , args: ($value)<br>
	 * @uses NumberOverride::UInt128ToDecStr_2 <br>protected , args: ($value, $digits)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function UInt128ToDecStr (\override ...$args){}
	private static function TryUInt128ToDecStr($value, $digits, $destination, &$charsWritten){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Int32& &$digits
	 * @return \System\Char
	 */
	protected static function ParseFormatSpecifier($format, &$digits){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Number+NumberBuffer& $number
	 * @param \System\Char $format
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Void|void
	 */
	protected static function NumberToString($sb, $number, $format, $nMaxDigits, $info){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Number+NumberBuffer& $number
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Void|void
	 */
	protected static function NumberToStringFormat($sb, $number, $format, $info){}
	private static function FormatCurrency($sb, $number, $nMaxDigits, $info){}
	private static function FormatFixed($sb, $number, $nMaxDigits, $groupDigits, $sDecimal, $sGroup){}
	private static function FormatNumber($sb, $number, $nMaxDigits, $info){}
	private static function FormatScientific($sb, $number, $nMaxDigits, $info, $expChar){}
	private static function FormatExponent($sb, $info, $value, $expChar, $minDigits, $positiveSign){}
	private static function FormatGeneral($sb, $number, $nMaxDigits, $info, $expChar, $bSuppressScientific){}
	private static function FormatPercent($sb, $number, $nMaxDigits, $info){}
	/**
	 * @param \System\Number+NumberBuffer& $number
	 * @param \System\Int32|int $pos
	 * @param \System\Boolean|bool $isCorrectlyRounded
	 * @return \System\Void|void
	 */
	protected static function RoundNumber($number, $pos, $isCorrectlyRounded){}
	private static function FindSection($format, $section){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses NumberOverride::ExtractFractionAndBiasedExponent_1 <br>private , args: ($value, &$exponent)<br>
	 * @uses NumberOverride::ExtractFractionAndBiasedExponent_2 <br>private , args: ($value, &$exponent)<br>
	 * @uses NumberOverride::ExtractFractionAndBiasedExponent_3 <br>private , args: ($value, &$exponent)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt64|\System\UInt16|\System\UInt32|mixed|\override
	 */
	#[MethodOverridePrivate]function ExtractFractionAndBiasedExponent (\override ...$args){}
	private static function AccumulateDecimalDigitsIntoBigInteger($number, $firstIndex, $lastIndex, &$result){}
	private static function AssembleFloatingPointBits(&$info, $initialMantissa, $initialExponent, $hasZeroTail){}
	private static function ConvertBigIntegerToFloatingPointBits($value, &$info, $integerBitsOfPrecision, $hasNonZeroFractionalPart){}
	private static function DigitsToUInt32($p, $count){}
	private static function DigitsToUInt64($p, $count){}
	/**
	 * @param \System\Byte* $chars
	 * @return \System\UInt32
	 */
	protected static function ParseEightDigitsUnrolled($chars){}
	private static function NumberToDoubleFloatingPointBits($number, &$info){}
	private static function NumberToHalfFloatingPointBits($number, &$info){}
	private static function NumberToSingleFloatingPointBits($number, &$info){}
	private static function NumberToFloatingPointBitsSlow($number, &$info, $positiveExponent, $integerDigitsPresent, $fractionalDigitsPresent){}
	private static function RightShiftWithRounding($value, $shift, $hasZeroTail){}
	private static function ShouldRoundUp($lsbBit, $roundBit, $hasTailBits){}
	/**
	 * @param \System\Int64|int $q
	 * @param \System\UInt64 $w
	 * @param \System\Number+FloatingPointInfo $info
	 * @return \System\ValueTuple_2[System\Int32,System\UInt64]
	 */
	protected static function ComputeFloat($q, $w, $info){}
	private static function ComputeProductApproximation($bitPrecision, $q, $w){}
	/**
	 * @param \System\Int32|int $q
	 * @return \System\Int32|int
	 */
	protected static function CalculatePower($q){}
	private static function TryNumberToInt32($number, $value){}
	private static function TryNumberToInt64($number, $value){}
	private static function TryNumberToInt128($number, $value){}
	private static function TryNumberToUInt32($number, $value){}
	private static function TryNumberToUInt64($number, $value){}
	private static function TryNumberToUInt128($number, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int32|int
	 */
	protected static function ParseInt32($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int64|int
	 */
	protected static function ParseInt64($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int128
	 */
	protected static function ParseInt128($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt32
	 */
	protected static function ParseUInt32($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt64
	 */
	protected static function ParseUInt64($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt128
	 */
	protected static function ParseUInt128($value, $styles, $info){}
	private static function TryParseNumber($str, $strEnd, $styles, $number, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt32($value, $styles, $info, &$result){}
	private static function TryParseInt32Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt32IntegerStyle($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int64& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt64IntegerStyle($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int64& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt64($value, $styles, $info, &$result){}
	private static function TryParseInt64Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int128& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt128IntegerStyle($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int128& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseInt128($value, $styles, $info, &$result){}
	private static function TryParseInt128Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt32& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt32($value, $styles, $info, &$result){}
	private static function TryParseUInt32Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt32& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt32IntegerStyle($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\UInt32& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt32HexNumberStyle($value, $styles, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt64& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt64($value, $styles, $info, &$result){}
	private static function TryParseUInt64Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt64& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt64IntegerStyle($value, $styles, $info, &$result){}
	private static function TryParseUInt64HexNumberStyle($value, $styles, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt128& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt128($value, $styles, $info, &$result){}
	private static function TryParseUInt128Number($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt128& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseUInt128IntegerStyle($value, $styles, $info, &$result){}
	private static function TryParseUInt128HexNumberStyle($value, $styles, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Decimal
	 */
	protected static function ParseDecimal($value, $styles, $info){}
	/**
	 * @param \System\Number+NumberBuffer& $number
	 * @param \System\Decimal& $value
	 * @return \System\Boolean|bool
	 */
	protected static function TryNumberToDecimal($number, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Double|double
	 */
	protected static function ParseDouble($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Single
	 */
	protected static function ParseSingle($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Half
	 */
	protected static function ParseHalf($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Decimal& &$result
	 * @return \System\Number+ParsingStatus
	 */
	protected static function TryParseDecimal($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	protected static function SpanStartsWith($span, $c){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Double& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseDouble($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Half& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseHalf($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Single& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseSingle($value, $styles, $info, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Number+NumberBuffer& $number
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Boolean|bool
	 */
	protected static function TryStringToNumber($value, $styles, $number, $info){}
	private static function TrailingZeros($value, $index){}
	private static function IsSpaceReplacingChar($c){}
	private static function MatchNegativeSignChars($p, $pEnd, $info){}
	private static function MatchChars($p, $pEnd, $value){}
	private static function IsWhite($ch){}
	private static function IsDigit($ch){}
	/**
	 * @param \System\Number+ParsingStatus $status
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\TypeCode $type
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowOrFormatException($status, $value, $type){}
	/**
	 * @param \System\TypeCode $type
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowException($type){}
	/**
	 * @param \System\Number+ParsingStatus $status
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowOrFormatExceptionInt128($status){}
	/**
	 * @param \System\Number+ParsingStatus $status
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowOrFormatExceptionUInt128($status){}
	private static function GetException($status, $value, $type){}
	private static function GetOverflowException($type){}
	private static function GetExceptionInt128($status){}
	private static function GetExceptionUInt128($status){}
	/**
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Double|double
	 */
	protected static function NumberToDouble($number){}
	/**
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Half
	 */
	protected static function NumberToHalf($number){}
	/**
	 * @param \System\Number+NumberBuffer& $number
	 * @return \System\Single
	 */
	protected static function NumberToSingle($number){}
}