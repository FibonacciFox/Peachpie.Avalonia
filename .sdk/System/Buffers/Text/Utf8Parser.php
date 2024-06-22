<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Utf8ParserOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\DateTime& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\DateTimeOffset& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Decimal& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Single& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Double& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Guid& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_7 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\SByte& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_8 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int16& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_9 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int32& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_10 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Int64& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_11 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Byte& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_12 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt16& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_13 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt32& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_14 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\UInt64& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_15 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\TimeSpan& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @param \System\Char $standardFormat
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_16 ($source, &$value, &$bytesConsumed, $standardFormat){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Boolean|bool $offsetNegative
	 * @param \System\Int32|int $offsetHours
	 * @param \System\Int32|int $offsetMinutes
	 * @param \System\DateTimeOffset& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryCreateDateTimeOffset_1 ($dateTime, $offsetNegative, $offsetHours, $offsetMinutes, &$value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $fraction
	 * @param \System\Boolean|bool $offsetNegative
	 * @param \System\Int32|int $offsetHours
	 * @param \System\Int32|int $offsetMinutes
	 * @param \System\DateTimeOffset& &$value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryCreateDateTimeOffset_2 ($year, $month, $day, $hour, $minute, $second, $fraction, $offsetNegative, $offsetHours, $offsetMinutes, &$value){}
}
class Utf8Parser extends \System\Object
{
	use Utf8ParserOverride;


	/**
	 * @uses Utf8ParserOverride::TryParse_1 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_2 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_3 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_4 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_5 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_6 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_7 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_8 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_9 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_10 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_11 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_12 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_13 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_14 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_15 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @uses Utf8ParserOverride::TryParse_16 <br>public , args: ($source, &$value, &$bytesConsumed, $standardFormat)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TryParseDateTimeOffsetDefault($source, &$value, &$bytesConsumed){}
	private static function TryParseDateTimeG($source, &$value, &$valueAsOffset, &$bytesConsumed){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses Utf8ParserOverride::TryCreateDateTimeOffset_1 <br>private , args: ($dateTime, $offsetNegative, $offsetHours, $offsetMinutes, &$value)<br>
	 * @uses Utf8ParserOverride::TryCreateDateTimeOffset_2 <br>private , args: ($year, $month, $day, $hour, $minute, $second, $fraction, $offsetNegative, $offsetHours, $offsetMinutes, &$value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryCreateDateTimeOffset (\override ...$args){}
	private static function TryCreateDateTimeOffsetInterpretingDataAsLocalTime($year, $month, $day, $hour, $minute, $second, $fraction, &$value){}
	private static function TryCreateDateTime($year, $month, $day, $hour, $minute, $second, $fraction, $kind, &$value){}
	private static function TryParseDateTimeOffsetO($source, &$value, &$bytesConsumed, &$kind){}
	private static function TryParseDateTimeOffsetR($source, $caseFlipXorMask, &$dateTimeOffset, &$bytesConsumed){}
	private static function TryParseNormalAsFloatingPoint($source, $number, &$bytesConsumed, $standardFormat){}
	private static function TryParseAsSpecialFloatingPoint($source, $positiveInfinity, $negativeInfinity, $nan, &$value, &$bytesConsumed){}
	private static function TryParseGuidN($text, &$value, &$bytesConsumed){}
	private static function TryParseGuidCore($source, &$value, &$bytesConsumed, $ends){}
	private static function TryParseSByteD($source, &$value, &$bytesConsumed){}
	private static function TryParseInt16D($source, &$value, &$bytesConsumed){}
	private static function TryParseInt32D($source, &$value, &$bytesConsumed){}
	private static function TryParseInt64D($source, &$value, &$bytesConsumed){}
	private static function TryParseSByteN($source, &$value, &$bytesConsumed){}
	private static function TryParseInt16N($source, &$value, &$bytesConsumed){}
	private static function TryParseInt32N($source, &$value, &$bytesConsumed){}
	private static function TryParseInt64N($source, &$value, &$bytesConsumed){}
	private static function TryParseByteD($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt16D($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt32D($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt64D($source, &$value, &$bytesConsumed){}
	private static function TryParseByteN($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt16N($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt32N($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt64N($source, &$value, &$bytesConsumed){}
	private static function TryParseByteX($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt16X($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt32X($source, &$value, &$bytesConsumed){}
	private static function TryParseUInt64X($source, &$value, &$bytesConsumed){}
	private static function TryParseNumber($source, $number, &$bytesConsumed, $options, &$textUsedExponentNotation){}
	private static function TryParseTimeSpanBigG($source, &$value, &$bytesConsumed){}
	private static function TryParseTimeSpanC($source, &$value, &$bytesConsumed){}
	private static function TryParseTimeSpanFraction($source, &$value, &$bytesConsumed){}
	private static function TryCreateTimeSpan($isNegative, $days, $hours, $minutes, $seconds, $fraction, &$timeSpan){}
	private static function TryParseTimeSpanLittleG($source, &$value, &$bytesConsumed){}
}