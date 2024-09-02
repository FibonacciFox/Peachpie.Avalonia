<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeParseOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ParseExact_1 ($s, $format, $dtfi, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeSpan& &$offset
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ParseExact_2 ($s, $format, $dtfi, $style, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExact_1 ($s, $format, $dtfi, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @param \System\TimeSpan& &$offset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExact_2 ($s, $format, $dtfi, $style, &$result, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTimeResult& $result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExact_3 ($s, $format, $dtfi, $style, $result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ParseExactMultiple_1 ($s, $formats, $dtfi, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeSpan& &$offset
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ParseExactMultiple_2 ($s, $formats, $dtfi, $style, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @param \System\TimeSpan& &$offset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExactMultiple_1 ($s, $formats, $dtfi, $style, &$result, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExactMultiple_2 ($s, $formats, $dtfi, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateTimeResult& $result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParseExactMultiple_3 ($s, $formats, $dtfi, $style, $result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function Parse_1 ($s, $dtfi, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\TimeSpan& &$offset
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function Parse_2 ($s, $dtfi, $styles, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParse_1 ($s, $dtfi, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTime& &$result
	 * @param \System\TimeSpan& &$offset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParse_2 ($s, $dtfi, $styles, &$result, &$offset){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeResult& $result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryParse_3 ($s, $dtfi, $styles, $result){}
	/**
	 * @deprecated
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $digitLen
	 * @param \System\Int32& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function ParseDigits_1 ($str, $digitLen, &$result){}
	/**
	 * @deprecated
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $minDigitLen
	 * @param \System\Int32|int $maxDigitLen
	 * @param \System\Int32& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function ParseDigits_2 ($str, $minDigitLen, $maxDigitLen, &$result){}
}
class DateTimeParse extends \System\Object
{
	use DateTimeParseOverride;

	/**
	 * @uses DateTimeParseOverride::ParseExact_1 <br>protected , args: ($s, $format, $dtfi, $style)<br>
	 * @uses DateTimeParseOverride::ParseExact_2 <br>protected , args: ($s, $format, $dtfi, $style, &$offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverrideProtected]function ParseExact (\override ...$args){}
	/**
	 * @uses DateTimeParseOverride::TryParseExact_1 <br>protected , args: ($s, $format, $dtfi, $style, &$result)<br>
	 * @uses DateTimeParseOverride::TryParseExact_2 <br>protected , args: ($s, $format, $dtfi, $style, &$result, &$offset)<br>
	 * @uses DateTimeParseOverride::TryParseExact_3 <br>protected , args: ($s, $format, $dtfi, $style, $result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function TryParseExact (\override ...$args){}
	/**
	 * @uses DateTimeParseOverride::ParseExactMultiple_1 <br>protected , args: ($s, $formats, $dtfi, $style)<br>
	 * @uses DateTimeParseOverride::ParseExactMultiple_2 <br>protected , args: ($s, $formats, $dtfi, $style, &$offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverrideProtected]function ParseExactMultiple (\override ...$args){}
	/**
	 * @uses DateTimeParseOverride::TryParseExactMultiple_1 <br>protected , args: ($s, $formats, $dtfi, $style, &$result, &$offset)<br>
	 * @uses DateTimeParseOverride::TryParseExactMultiple_2 <br>protected , args: ($s, $formats, $dtfi, $style, &$result)<br>
	 * @uses DateTimeParseOverride::TryParseExactMultiple_3 <br>protected , args: ($s, $formats, $dtfi, $style, $result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function TryParseExactMultiple (\override ...$args){}
	private static function MatchWord($str, $target){}
	private static function GetTimeZoneName($str){}
	private static function ParseFraction($str, &$result){}
	private static function ParseTimeZone($str, $result){}
	private static function HandleTimeZone($str, $result){}
	private static function Lex($dps, $str, $dtok, $raw, $result, $dtfi, $styles){}
	private static function VerifyValidPunctuation($str){}
	private static function GetYearMonthDayOrder($datePattern, &$order){}
	private static function GetYearMonthOrder($pattern, &$order){}
	private static function GetMonthDayOrder($pattern, &$order){}
	private static function TryAdjustYear($result, $year, &$adjustedYear){}
	private static function SetDateYMD($result, $year, $month, $day){}
	private static function SetDateMDY($result, $month, $day, $year){}
	private static function SetDateDMY($result, $day, $month, $year){}
	private static function SetDateYDM($result, $year, $day, $month){}
	private static function GetDefaultYear($result, $styles){}
	private static function GetDayOfNN($result, $styles, $raw, $dtfi){}
	private static function GetDayOfNNN($result, $raw, $dtfi){}
	private static function GetDayOfMN($result, $styles, $raw, $dtfi){}
	private static function GetHebrewDayOfNM($result, $raw, $dtfi){}
	private static function GetDayOfNM($result, $styles, $raw, $dtfi){}
	private static function GetDayOfMNN($result, $raw, $dtfi){}
	private static function GetDayOfYNN($result, $raw, $dtfi){}
	private static function GetDayOfNNY($result, $raw, $dtfi){}
	private static function GetDayOfYMN($result, $raw){}
	private static function GetDayOfYN($result, $raw){}
	private static function GetDayOfYM($result, $raw){}
	private static function AdjustTimeMark($dtfi, $raw){}
	private static function AdjustHour($hour, $timeMark){}
	private static function GetTimeOfN($result, $raw){}
	private static function GetTimeOfNN($result, $raw){}
	private static function GetTimeOfNNN($result, $raw){}
	private static function GetDateOfDSN($result, $raw){}
	private static function GetDateOfNDS($result, $raw){}
	private static function GetDateOfNNDS($result, $raw, $dtfi){}
	private static function ProcessDateTimeSuffix($result, $raw, $dtok){}
	/**
	 * @param \System\DateTimeParse+DS $dps
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Boolean|bool
	 */
	protected static function ProcessHebrewTerminalState($dps, $result, $styles, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeParse+DS $dps
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Boolean|bool
	 */
	protected static function ProcessTerminalState($dps, $result, $styles, $raw, $dtfi){}
	/**
	 * @uses DateTimeParseOverride::Parse_1 <br>protected , args: ($s, $dtfi, $styles)<br>
	 * @uses DateTimeParseOverride::Parse_2 <br>protected , args: ($s, $dtfi, $styles, &$offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverrideProtected]function Parse (\override ...$args){}
	/**
	 * @uses DateTimeParseOverride::TryParse_1 <br>protected , args: ($s, $dtfi, $styles, &$result)<br>
	 * @uses DateTimeParseOverride::TryParse_2 <br>protected , args: ($s, $dtfi, $styles, &$result, &$offset)<br>
	 * @uses DateTimeParseOverride::TryParse_3 <br>protected , args: ($s, $dtfi, $styles, $result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function TryParse (\override ...$args){}
	private static function DetermineTimeZoneAdjustments($result, $styles, $bTimeOnly){}
	private static function DateTimeOffsetTimeZonePostProcessing($result, $styles){}
	private static function AdjustTimeZoneToUniversal($result){}
	private static function AdjustTimeZoneToLocal($result, $bTimeOnly){}
	private static function ParseISO8601($raw, $str, $styles, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $digitLen
	 * @param \System\Int32& &$number
	 * @return \System\Boolean|bool
	 */
	protected static function MatchHebrewDigits($str, $digitLen, &$number){}
	/**
	 * @uses DateTimeParseOverride::ParseDigits_1 <br>protected , args: ($str, $digitLen, &$result)<br>
	 * @uses DateTimeParseOverride::ParseDigits_2 <br>protected , args: ($str, $minDigitLen, $maxDigitLen, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function ParseDigits (\override ...$args){}
	private static function ParseFractionExact($str, $maxDigitLen, $result){}
	private static function ParseSign($str, $result){}
	private static function ParseTimeZoneOffset($str, $len, $result){}
	private static function MatchAbbreviatedMonthName($str, $dtfi, $result){}
	private static function MatchMonthName($str, $dtfi, $result){}
	private static function MatchAbbreviatedDayName($str, $dtfi, $result){}
	private static function MatchDayName($str, $dtfi, $result){}
	private static function MatchEraName($str, $dtfi, $result){}
	private static function MatchTimeMark($str, $dtfi, $result){}
	private static function MatchAbbreviatedTimeMark($str, $dtfi, $result){}
	private static function CheckNewValue($currentValue, $newValue, $patternChar, $result){}
	private static function GetDateTimeNow($result, $styles){}
	private static function CheckDefaultDateTime($result, $cal, $styles){}
	private static function ExpandPredefinedFormat($format, $dtfi, $parseInfo, $result){}
	private static function ParseJapaneseEraStart($str, $dtfi){}
	private static function ConfigureFormatR($dtfi, $parseInfo, $result){}
	private static function ConfigureFormatOS($dtfi, $parseInfo){}
	private static function ParseByFormat($str, $format, $parseInfo, $dtfi, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Int32|int $pos
	 * @param \System\Text\ValueStringBuilder& $result
	 * @param \System\Int32& &$returnValue
	 * @return \System\Boolean|bool
	 */
	protected static function TryParseQuoteString($format, $pos, $result, &$returnValue){}
	private static function DoStrictParse($s, $formatParam, $styles, $dtfi, $result){}
	private static function ParseFormatR($source, $parseInfo, $result){}
	private static function ParseFormatO($source, $result){}
	private static function GetDateTimeParseException($result){}
}