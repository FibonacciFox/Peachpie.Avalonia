<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NumberMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function FormatDouble_1($value, $format, $info){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function FormatDouble_2($sb, $value, $format, $info){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function FormatSingle_1($value, $format, $info){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function FormatSingle_2($sb, $value, $format, $info){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function FormatHalf_1($value, $format, $info){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function FormatHalf_2($sb, $value, $format, $info){}
	/**
	 * @return \System\Byte*
	 */
	#[MethodOverride] protected static function UInt32ToDecChars_1($bufferEnd, $value, $digits){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt32ToDecChars_2($bufferEnd, $value){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt32ToDecChars_3($bufferEnd, $value, $digits){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function UInt32ToDecStr_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function UInt32ToDecStr_2($value, $digits){}
	/**
	 * @return \System\Byte*
	 */
	#[MethodOverride] protected static function UInt64ToDecChars_1($bufferEnd, $value, $digits){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt64ToDecChars_2($bufferEnd, $value){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt64ToDecChars_3($bufferEnd, $value, $digits){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function UInt64ToDecStr_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function UInt64ToDecStr_2($value, $digits){}
	/**
	 * @return \System\Byte*
	 */
	#[MethodOverride] protected static function UInt128ToDecChars_1($bufferEnd, $value, $digits){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt128ToDecChars_2($bufferEnd, $value){}
	/**
	 * @return \System\Char*
	 */
	#[MethodOverride] protected static function UInt128ToDecChars_3($bufferEnd, $value, $digits){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function UInt128ToDecStr_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function UInt128ToDecStr_2($value, $digits){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private static function ExtractFractionAndBiasedExponent_1($value, $exponent){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] private static function ExtractFractionAndBiasedExponent_2($value, $exponent){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function ExtractFractionAndBiasedExponent_3($value, $exponent){}
}
/**
 */
class Number extends \System\Object
{
	/**
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean $isSignificantDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Double($value, $cutoffNumber, $isSignificantDigits, $number){}
	/**
	 * @param \System\Half $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean $isSignificantDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Half($value, $cutoffNumber, $isSignificantDigits, $number){}
	/**
	 * @param \System\Single $value
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean $isSignificantDigits
	 * @param \System\NumberBuffer& $number
	 * @return \System\Void|void
	 */
	public static function Dragon4Single($value, $cutoffNumber, $isSignificantDigits, $number){}
	/**
	 * @param \System\UInt64 $mantissa
	 * @param \System\Int32|int $exponent
	 * @param \System\UInt32 $mantissaHighBitIdx
	 * @param \System\Boolean $hasUnequalMargins
	 * @param \System\Int32|int $cutoffNumber
	 * @param \System\Boolean $isSignificantDigits
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32& $decimalExponent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Dragon4($mantissa, $exponent, $mantissaHighBitIdx, $hasUnequalMargins, $cutoffNumber, $isSignificantDigits, $buffer, $decimalExponent){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\String|string
	 */
	public static function FormatDecimal($value, $format, $info){}
	/**
	 * @param \System\Decimal $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatDecimal($value, $format, $info, $destination, $charsWritten){}
	/**
	 * @param \System\Decimal& $d
	 * @param \System\NumberBuffer& $number
	 * @return \System\Void|void
	 */
	protected static function DecimalToNumber($d, $number){}
	/**
	 * @uses NumberMethodsOverride::FormatDouble_1 ($value, $format, $info)
	 * @uses NumberMethodsOverride::FormatDouble_2 ($sb, $value, $format, $info)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FormatDouble(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatDouble($value, $format, $info, $destination, $charsWritten){}
	/**
	 * @param \System\Char $fmt
	 * @param \System\Int32& $precision
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Boolean& $isSignificantDigits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFloatingPointMaxDigitsAndPrecision($fmt, $precision, $info, $isSignificantDigits){}
	/**
	 * @uses NumberMethodsOverride::FormatSingle_1 ($value, $format, $info)
	 * @uses NumberMethodsOverride::FormatSingle_2 ($sb, $value, $format, $info)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FormatSingle(mixed ...$args){}
	/**
	 * @param \System\Single $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatSingle($value, $format, $info, $destination, $charsWritten){}
	/**
	 * @uses NumberMethodsOverride::FormatHalf_1 ($value, $format, $info)
	 * @uses NumberMethodsOverride::FormatHalf_2 ($sb, $value, $format, $info)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FormatHalf(mixed ...$args){}
	/**
	 * @param \System\Half $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatHalf($value, $format, $info, $destination, $charsWritten){}
	/**
	 * @param \System\String|string $source
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCopyTo($source, $destination, $charsWritten){}
	/**
	 * @param \System\Char $fmt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHexBase($fmt){}
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
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatInt32($value, $hexMask, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt32($value, $format, $provider){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatUInt32($value, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatInt64($value, $format, $provider){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatInt64($value, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt64($value, $format, $provider){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatUInt64($value, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatInt128($value, $format, $provider){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatInt128($value, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	public static function FormatUInt128($value, $format, $provider){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatUInt128($value, $format, $provider, $destination, $charsWritten){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int32ToNumber($value, $number){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\String|string
	 */
	public static function Int32ToDecStr($value){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NegativeInt32ToDecStr($value, $digits, $sNegative){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNegativeInt32ToDecStr($value, $digits, $sNegative, $destination, $charsWritten){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int32ToHexStr($value, $hexBase, $digits){}
	/**
	 * @param \System\Int32|int $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryInt32ToHexStr($value, $hexBase, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\Char* $buffer
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int32ToHexChars($buffer, $value, $hexBase, $digits){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt32ToNumber($value, $number){}
	/**
	 * @uses NumberMethodsOverride::UInt32ToDecChars_1 ($bufferEnd, $value, $digits)
	 * @uses NumberMethodsOverride::UInt32ToDecChars_2 ($bufferEnd, $value)
	 * @uses NumberMethodsOverride::UInt32ToDecChars_3 ($bufferEnd, $value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt32ToDecChars(mixed ...$args){}
	/**
	 * @uses NumberMethodsOverride::UInt32ToDecStr_1 ($value)
	 * @uses NumberMethodsOverride::UInt32ToDecStr_2 ($value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt32ToDecStr(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryUInt32ToDecStr($value, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int64ToNumber($value, $number){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\String|string
	 */
	public static function Int64ToDecStr($value){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NegativeInt64ToDecStr($value, $digits, $sNegative){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNegativeInt64ToDecStr($value, $digits, $sNegative, $destination, $charsWritten){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int64ToHexStr($value, $hexBase, $digits){}
	/**
	 * @param \System\Int64|int $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryInt64ToHexStr($value, $hexBase, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\Char* $buffer
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int64ToHexChars($buffer, $value, $hexBase, $digits){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt64ToNumber($value, $number){}
	/**
	 * @uses NumberMethodsOverride::UInt64ToDecChars_1 ($bufferEnd, $value, $digits)
	 * @uses NumberMethodsOverride::UInt64ToDecChars_2 ($bufferEnd, $value)
	 * @uses NumberMethodsOverride::UInt64ToDecChars_3 ($bufferEnd, $value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt64ToDecChars(mixed ...$args){}
	/**
	 * @uses NumberMethodsOverride::UInt64ToDecStr_1 ($value)
	 * @uses NumberMethodsOverride::UInt64ToDecStr_2 ($value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt64ToDecStr(mixed ...$args){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryUInt64ToDecStr($value, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int128ToNumber($value, $number){}
	/**
	 * @param \System\Int128 $value
	 * @return \System\String|string
	 */
	public static function Int128ToDecStr($value){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NegativeInt128ToDecStr($value, $digits, $sNegative){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\Int32|int $digits
	 * @param \System\String|string $sNegative
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNegativeInt128ToDecStr($value, $digits, $sNegative, $destination, $charsWritten){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int128ToHexStr($value, $hexBase, $digits){}
	/**
	 * @param \System\Int128 $value
	 * @param \System\Char $hexBase
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryInt128ToHexStr($value, $hexBase, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\Char* $buffer
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $hexBase
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int128ToHexChars($buffer, $value, $hexBase, $digits){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\NumberBuffer& $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UInt128ToNumber($value, $number){}
	/**
	 * @param \System\UInt128& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Int128DivMod1E19($value){}
	/**
	 * @uses NumberMethodsOverride::UInt128ToDecChars_1 ($bufferEnd, $value, $digits)
	 * @uses NumberMethodsOverride::UInt128ToDecChars_2 ($bufferEnd, $value)
	 * @uses NumberMethodsOverride::UInt128ToDecChars_3 ($bufferEnd, $value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt128ToDecChars(mixed ...$args){}
	/**
	 * @uses NumberMethodsOverride::UInt128ToDecStr_1 ($value)
	 * @uses NumberMethodsOverride::UInt128ToDecStr_2 ($value, $digits)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UInt128ToDecStr(mixed ...$args){}
	/**
	 * @param \System\UInt128 $value
	 * @param \System\Int32|int $digits
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryUInt128ToDecStr($value, $digits, $destination, $charsWritten){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32& $digits
	 * @return \System\Char
	 */
	protected static function ParseFormatSpecifier($format, $digits){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Char $format
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Void|void
	 */
	protected static function NumberToString($sb, $number, $format, $nMaxDigits, $info){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Void|void
	 */
	protected static function NumberToStringFormat($sb, $number, $format, $info){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatCurrency($sb, $number, $nMaxDigits, $info){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Int32[] $groupDigits
	 * @param \System\String|string $sDecimal
	 * @param \System\String|string $sGroup
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatFixed($sb, $number, $nMaxDigits, $groupDigits, $sDecimal, $sGroup){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatNumber($sb, $number, $nMaxDigits, $info){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Char $expChar
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatScientific($sb, $number, $nMaxDigits, $info, $expChar){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32|int $value
	 * @param \System\Char $expChar
	 * @param \System\Int32|int $minDigits
	 * @param \System\Boolean $positiveSign
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatExponent($sb, $info, $value, $expChar, $minDigits, $positiveSign){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Char $expChar
	 * @param \System\Boolean $bSuppressScientific
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatGeneral($sb, $number, $nMaxDigits, $info, $expChar, $bSuppressScientific){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sb
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $nMaxDigits
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatPercent($sb, $number, $nMaxDigits, $info){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32|int $pos
	 * @param \System\Boolean $isCorrectlyRounded
	 * @return \System\Void|void
	 */
	protected static function RoundNumber($number, $pos, $isCorrectlyRounded){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $section
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindSection($format, $section){}
	/**
	 * @uses NumberMethodsOverride::ExtractFractionAndBiasedExponent_1 ($value, $exponent)
	 * @uses NumberMethodsOverride::ExtractFractionAndBiasedExponent_2 ($value, $exponent)
	 * @uses NumberMethodsOverride::ExtractFractionAndBiasedExponent_3 ($value, $exponent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExtractFractionAndBiasedExponent(mixed ...$args){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\UInt32 $firstIndex
	 * @param \System\UInt32 $lastIndex
	 * @param \System\BigInteger& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AccumulateDecimalDigitsIntoBigInteger($number, $firstIndex, $lastIndex, $result){}
	/**
	 * @param \System\FloatingPointInfo& $info
	 * @param \System\UInt64 $initialMantissa
	 * @param \System\Int32|int $initialExponent
	 * @param \System\Boolean $hasZeroTail
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AssembleFloatingPointBits($info, $initialMantissa, $initialExponent, $hasZeroTail){}
	/**
	 * @param \System\BigInteger& $value
	 * @param \System\FloatingPointInfo& $info
	 * @param \System\UInt32 $integerBitsOfPrecision
	 * @param \System\Boolean $hasNonZeroFractionalPart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertBigIntegerToFloatingPointBits($value, $info, $integerBitsOfPrecision, $hasNonZeroFractionalPart){}
	/**
	 * @param \System\Byte* $p
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DigitsToUInt32($p, $count){}
	/**
	 * @param \System\Byte* $p
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DigitsToUInt64($p, $count){}
	/**
	 * @param \System\Byte* $chars
	 * @return \System\UInt32
	 */
	protected static function ParseEightDigitsUnrolled($chars){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\FloatingPointInfo& $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NumberToDoubleFloatingPointBits($number, $info){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\FloatingPointInfo& $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NumberToHalfFloatingPointBits($number, $info){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\FloatingPointInfo& $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NumberToSingleFloatingPointBits($number, $info){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\FloatingPointInfo& $info
	 * @param \System\UInt32 $positiveExponent
	 * @param \System\UInt32 $integerDigitsPresent
	 * @param \System\UInt32 $fractionalDigitsPresent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NumberToFloatingPointBitsSlow($number, $info, $positiveExponent, $integerDigitsPresent, $fractionalDigitsPresent){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\Int32|int $shift
	 * @param \System\Boolean $hasZeroTail
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RightShiftWithRounding($value, $shift, $hasZeroTail){}
	/**
	 * @param \System\Boolean $lsbBit
	 * @param \System\Boolean $roundBit
	 * @param \System\Boolean $hasTailBits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShouldRoundUp($lsbBit, $roundBit, $hasTailBits){}
	/**
	 * @param \System\Int64|int $q
	 * @param \System\UInt64 $w
	 * @param \System\FloatingPointInfo $info
	 * @return \System\ValueTuple_2
	 */
	protected static function ComputeFloat($q, $w, $info){}
	/**
	 * @param \System\Int32|int $bitPrecision
	 * @param \System\Int64|int $q
	 * @param \System\UInt64 $w
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ComputeProductApproximation($bitPrecision, $q, $w){}
	/**
	 * @param \System\Int32|int $q
	 * @return \System\Int32|int
	 */
	protected static function CalculatePower($q){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToInt32($number, $value){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int64& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToInt64($number, $value){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int128& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToInt128($number, $value){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\UInt32& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToUInt32($number, $value){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\UInt64& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToUInt64($number, $value){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\UInt128& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryNumberToUInt128($number, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int32|int
	 */
	protected static function ParseInt32($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int64|int
	 */
	protected static function ParseInt64($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Int128
	 */
	protected static function ParseInt128($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt32
	 */
	protected static function ParseUInt32($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt64
	 */
	protected static function ParseUInt64($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\UInt128
	 */
	protected static function ParseUInt128($value, $styles, $info){}
	/**
	 * @param \System\Char*& $str
	 * @param \System\Char* $strEnd
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\NumberBuffer& $number
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseNumber($str, $strEnd, $styles, $number, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt32($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt32Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int32& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt32IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int64& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt64IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int64& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt64($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt64Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int128& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt128IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int128& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseInt128($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Int128& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt128Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt32& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt32($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt32Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt32& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt32IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\UInt32& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt32HexNumberStyle($value, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt64& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt64($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt64& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt64IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\UInt64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64HexNumberStyle($value, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt128& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt128($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt128& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt128Number($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\UInt128& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseUInt128IntegerStyle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\UInt128& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt128HexNumberStyle($value, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Decimal
	 */
	protected static function ParseDecimal($value, $styles, $info){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @param \System\Decimal& $value
	 * @return \System\Boolean
	 */
	protected static function TryNumberToDecimal($number, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Double|double
	 */
	protected static function ParseDouble($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Single
	 */
	protected static function ParseSingle($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Half
	 */
	protected static function ParseHalf($value, $styles, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Decimal& $result
	 * @return \System\ParsingStatus
	 */
	protected static function TryParseDecimal($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	protected static function SpanStartsWith($span, $c){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Double& $result
	 * @return \System\Boolean
	 */
	protected static function TryParseDouble($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Half& $result
	 * @return \System\Boolean
	 */
	protected static function TryParseHalf($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @param \System\Single& $result
	 * @return \System\Boolean
	 */
	protected static function TryParseSingle($value, $styles, $info, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Globalization\NumberStyles $styles
	 * @param \System\NumberBuffer& $number
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @return \System\Boolean
	 */
	protected static function TryStringToNumber($value, $styles, $number, $info){}
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrailingZeros($value, $index){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSpaceReplacingChar($c){}
	/**
	 * @param \System\Char* $p
	 * @param \System\Char* $pEnd
	 * @param \System\Globalization\NumberFormatInfo $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchNegativeSignChars($p, $pEnd, $info){}
	/**
	 * @param \System\Char* $p
	 * @param \System\Char* $pEnd
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchChars($p, $pEnd, $value){}
	/**
	 * @param \System\Int32|int $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWhite($ch){}
	/**
	 * @param \System\Int32|int $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsDigit($ch){}
	/**
	 * @param \System\ParsingStatus $status
	 * @param \System\ReadOnlySpan_1 $value
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
	 * @param \System\ParsingStatus $status
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowOrFormatExceptionInt128($status){}
	/**
	 * @param \System\ParsingStatus $status
	 * @return \System\Void|void
	 */
	protected static function ThrowOverflowOrFormatExceptionUInt128($status){}
	/**
	 * @param \System\ParsingStatus $status
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\TypeCode $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetException($status, $value, $type){}
	/**
	 * @param \System\TypeCode $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetOverflowException($type){}
	/**
	 * @param \System\ParsingStatus $status
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetExceptionInt128($status){}
	/**
	 * @param \System\ParsingStatus $status
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetExceptionUInt128($status){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @return \System\Double|double
	 */
	protected static function NumberToDouble($number){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @return \System\Half
	 */
	protected static function NumberToHalf($number){}
	/**
	 * @param \System\NumberBuffer& $number
	 * @return \System\Single
	 */
	protected static function NumberToSingle($number){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
