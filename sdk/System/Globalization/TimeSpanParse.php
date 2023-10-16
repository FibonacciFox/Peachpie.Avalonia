<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimeSpanParseMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function ParseExactDigits_1($tokenizer, $minDigitLength, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function ParseExactDigits_2($tokenizer, $minDigitLength, $maxDigitLength, $zeroes, $result){}
}
/**
 */
class TimeSpanParse extends \System\Object
{
	/**
	 * @param \System\Int32|int $pow
	 * @return \System\Int64|int
	 */
	protected static function Pow10($pow){}
	/**
	 * @param \System\Boolean $positive
	 * @param \System\Globalization\TimeSpanToken $days
	 * @param \System\Globalization\TimeSpanToken $hours
	 * @param \System\Globalization\TimeSpanToken $minutes
	 * @param \System\Globalization\TimeSpanToken $seconds
	 * @param \System\Globalization\TimeSpanToken $fraction
	 * @param \System\Int64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryTimeToTicks($positive, $days, $hours, $minutes, $seconds, $fraction, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	protected static function Parse($input, $formatProvider){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& $result
	 * @return \System\Boolean
	 */
	protected static function TryParse($input, $formatProvider, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	protected static function ParseExact($input, $format, $formatProvider, $styles){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& $result
	 * @return \System\Boolean
	 */
	protected static function TryParseExact($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\String[] $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	protected static function ParseExactMultiple($input, $formats, $formatProvider, $styles){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\String[] $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& $result
	 * @return \System\Boolean
	 */
	protected static function TryParseExactMultiple($input, $formats, $formatProvider, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpan($input, $style, $formatProvider, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminalState($raw, $style, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminal_DHMSF($raw, $style, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminal_HMS_F_D($raw, $style, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminal_HM_S_D($raw, $style, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminal_HM($raw, $style, $result){}
	/**
	 * @param \System\Globalization\TimeSpanRawInfo& $raw
	 * @param \System\Globalization\TimeSpanStandardStyles $style
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessTerminal_D($raw, $style, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactTimeSpan($input, $format, $formatProvider, $styles, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseByFormat($input, $format, $styles, $result){}
	/**
	 * @uses TimeSpanParseMethodsOverride::ParseExactDigits_1 ($tokenizer, $minDigitLength, $result)
	 * @uses TimeSpanParseMethodsOverride::ParseExactDigits_2 ($tokenizer, $minDigitLength, $maxDigitLength, $zeroes, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExactDigits(mixed ...$args){}
	/**
	 * @param \System\Globalization\TimeSpanTokenizer& $tokenizer
	 * @param \System\Text\ValueStringBuilder& $enquotedString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseExactLiteral($tokenizer, $enquotedString){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseTimeSpanConstant($input, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\String[] $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactMultipleTimeSpan($input, $formats, $formatProvider, $styles, $result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
