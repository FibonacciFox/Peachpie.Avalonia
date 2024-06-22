<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeSpanParseOverride {
	/**
	 * @deprecated
	 * @param \System\Globalization\TimeSpanParse+TimeSpanTokenizer& $tokenizer
	 * @param \System\Int32|int $minDigitLength
	 * @param \System\Int32& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function ParseExactDigits_1 ($tokenizer, $minDigitLength, &$result){}
	/**
	 * @deprecated
	 * @param \System\Globalization\TimeSpanParse+TimeSpanTokenizer& $tokenizer
	 * @param \System\Int32|int $minDigitLength
	 * @param \System\Int32|int $maxDigitLength
	 * @param \System\Int32& &$zeroes
	 * @param \System\Int32& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function ParseExactDigits_2 ($tokenizer, $minDigitLength, $maxDigitLength, &$zeroes, &$result){}
}
class TimeSpanParse extends \System\Object
{
	use TimeSpanParseOverride;


	/**
	 * @param \System\Int32|int $pow
	 * @return \System\Int64|int
	 */
	protected static function Pow10($pow){}
	private static function TryTimeToTicks($positive, $days, $hours, $minutes, $seconds, $fraction, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	protected static function Parse($input, $formatProvider){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParse($input, $formatProvider, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	protected static function ParseExact($input, $format, $formatProvider, $styles){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseExact($input, $format, $formatProvider, $styles, &$result){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	protected static function ParseExactMultiple($input, $formats, $formatProvider, $styles){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseExactMultiple($input, $formats, $formatProvider, $styles, &$result){}
	private static function TryParseTimeSpan($input, $style, $formatProvider, $result){}
	private static function ProcessTerminalState($raw, $style, $result){}
	private static function ProcessTerminal_DHMSF($raw, $style, $result){}
	private static function ProcessTerminal_HMS_F_D($raw, $style, $result){}
	private static function ProcessTerminal_HM_S_D($raw, $style, $result){}
	private static function ProcessTerminal_HM($raw, $style, $result){}
	private static function ProcessTerminal_D($raw, $style, $result){}
	private static function TryParseExactTimeSpan($input, $format, $formatProvider, $styles, $result){}
	private static function TryParseByFormat($input, $format, $styles, $result){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TimeSpanParseOverride::ParseExactDigits_1 <br>private , args: ($tokenizer, $minDigitLength, &$result)<br>
	 * @uses TimeSpanParseOverride::ParseExactDigits_2 <br>private , args: ($tokenizer, $minDigitLength, $maxDigitLength, &$zeroes, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function ParseExactDigits (\override ...$args){}
	private static function ParseExactLiteral($tokenizer, $enquotedString){}
	private static function TryParseTimeSpanConstant($input, $result){}
	private static function TryParseExactMultipleTimeSpan($input, $formats, $formatProvider, $styles, $result){}
}