<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Utf8ParserMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_5($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_6($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_7($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_8($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_9($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_10($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_11($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_12($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_13($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_14($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_15($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_16($source, $value, $bytesConsumed, $standardFormat){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryCreateDateTimeOffset_1($dateTime, $offsetNegative, $offsetHours, $offsetMinutes, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryCreateDateTimeOffset_2($year, $month, $day, $hour, $minute, $second, $fraction, $offsetNegative, $offsetHours, $offsetMinutes, $value){}
}
/**
 */
class Utf8Parser extends \System\Object
{
	/**
	 * @uses Utf8ParserMethodsOverride::TryParse_1 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_2 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_3 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_4 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_5 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_6 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_7 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_8 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_9 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_10 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_11 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_12 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_13 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_14 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_15 ($source, $value, $bytesConsumed, $standardFormat)
	 * @uses Utf8ParserMethodsOverride::TryParse_16 ($source, $value, $bytesConsumed, $standardFormat)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\DateTimeOffset& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseDateTimeOffsetDefault($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\DateTime& $value
	 * @param \System\DateTimeOffset& $valueAsOffset
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseDateTimeG($source, $value, $valueAsOffset, $bytesConsumed){}
	/**
	 * @uses Utf8ParserMethodsOverride::TryCreateDateTimeOffset_1 ($dateTime, $offsetNegative, $offsetHours, $offsetMinutes, $value)
	 * @uses Utf8ParserMethodsOverride::TryCreateDateTimeOffset_2 ($year, $month, $day, $hour, $minute, $second, $fraction, $offsetNegative, $offsetHours, $offsetMinutes, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryCreateDateTimeOffset(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $fraction
	 * @param \System\DateTimeOffset& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateDateTimeOffsetInterpretingDataAsLocalTime($year, $month, $day, $hour, $minute, $second, $fraction, $value){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $fraction
	 * @param \System\DateTimeKind $kind
	 * @param \System\DateTime& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateDateTime($year, $month, $day, $hour, $minute, $second, $fraction, $kind, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\DateTimeOffset& $value
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\DateTimeKind& $kind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseDateTimeOffsetO($source, $value, $bytesConsumed, $kind){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32 $caseFlipXorMask
	 * @param \System\DateTimeOffset& $dateTimeOffset
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseDateTimeOffsetR($source, $caseFlipXorMask, $dateTimeOffset, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\Char $standardFormat
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseNormalAsFloatingPoint($source, $number, $bytesConsumed, $standardFormat){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Buffers\Text\T $positiveInfinity
	 * @param \System\Buffers\Text\T $negativeInfinity
	 * @param \System\Buffers\Text\T $nan
	 * @param \System\Buffers\Text\T& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseAsSpecialFloatingPoint($source, $positiveInfinity, $negativeInfinity, $nan, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \System\Guid& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseGuidN($text, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Guid& $value
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\Int32|int $ends
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseGuidCore($source, $value, $bytesConsumed, $ends){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\SByte& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseSByteD($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int16& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt16D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt32D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int64& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt64D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\SByte& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseSByteN($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int16& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt16N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt32N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Int64& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt64N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Byte& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseByteD($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt16& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt16D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt32D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt64& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64D($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Byte& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseByteN($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt16& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt16N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt32N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt64& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64N($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Byte& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseByteX($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt16& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt16X($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt32X($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt64& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64X($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\NumberBuffer& $number
	 * @param \System\Int32& $bytesConsumed
	 * @param \System\Buffers\Text\ParseNumberOptions $options
	 * @param \System\Boolean& $textUsedExponentNotation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseNumber($source, $number, $bytesConsumed, $options, $textUsedExponentNotation){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\TimeSpan& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpanBigG($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\TimeSpan& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpanC($source, $value, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\UInt32& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpanFraction($source, $value, $bytesConsumed){}
	/**
	 * @param \System\Boolean $isNegative
	 * @param \System\UInt32 $days
	 * @param \System\UInt32 $hours
	 * @param \System\UInt32 $minutes
	 * @param \System\UInt32 $seconds
	 * @param \System\UInt32 $fraction
	 * @param \System\TimeSpan& $timeSpan
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateTimeSpan($isNegative, $days, $hours, $minutes, $seconds, $fraction, $timeSpan){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\TimeSpan& $value
	 * @param \System\Int32& $bytesConsumed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpanLittleG($source, $value, $bytesConsumed){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
