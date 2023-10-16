<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeParseMethodsOverride
{
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ParseExact_1($s, $format, $dtfi, $style){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ParseExact_2($s, $format, $dtfi, $style, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExact_1($s, $format, $dtfi, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExact_2($s, $format, $dtfi, $style, $result, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExact_3($s, $format, $dtfi, $style, $result){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ParseExactMultiple_1($s, $formats, $dtfi, $style){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ParseExactMultiple_2($s, $formats, $dtfi, $style, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExactMultiple_1($s, $formats, $dtfi, $style, $result, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExactMultiple_2($s, $formats, $dtfi, $style, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParseExactMultiple_3($s, $formats, $dtfi, $style, $result){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function Parse_1($s, $dtfi, $styles){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function Parse_2($s, $dtfi, $styles, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParse_1($s, $dtfi, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParse_2($s, $dtfi, $styles, $result, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryParse_3($s, $dtfi, $styles, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function ParseDigits_1($str, $digitLen, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function ParseDigits_2($str, $minDigitLen, $maxDigitLen, $result){}
}
/**
 */
class DateTimeParse extends \System\Object
{
	/**
	 * @uses DateTimeParseMethodsOverride::ParseExact_1 ($s, $format, $dtfi, $style)
	 * @uses DateTimeParseMethodsOverride::ParseExact_2 ($s, $format, $dtfi, $style, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses DateTimeParseMethodsOverride::TryParseExact_1 ($s, $format, $dtfi, $style, $result)
	 * @uses DateTimeParseMethodsOverride::TryParseExact_2 ($s, $format, $dtfi, $style, $result, $offset)
	 * @uses DateTimeParseMethodsOverride::TryParseExact_3 ($s, $format, $dtfi, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @uses DateTimeParseMethodsOverride::ParseExactMultiple_1 ($s, $formats, $dtfi, $style)
	 * @uses DateTimeParseMethodsOverride::ParseExactMultiple_2 ($s, $formats, $dtfi, $style, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExactMultiple(mixed ...$args){}
	/**
	 * @uses DateTimeParseMethodsOverride::TryParseExactMultiple_1 ($s, $formats, $dtfi, $style, $result, $offset)
	 * @uses DateTimeParseMethodsOverride::TryParseExactMultiple_2 ($s, $formats, $dtfi, $style, $result)
	 * @uses DateTimeParseMethodsOverride::TryParseExactMultiple_3 ($s, $formats, $dtfi, $style, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExactMultiple(mixed ...$args){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\String|string $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchWord($str, $target){}
	/**
	 * @param \System\__DTString& $str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeZoneName($str){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Double& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFraction($str, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\TimeSpan& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTimeZone($str, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandleTimeZone($str, $result){}
	/**
	 * @param \System\DS $dps
	 * @param \System\__DTString& $str
	 * @param \System\DateTimeToken& $dtok
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeFormatInfo& $dtfi
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Lex($dps, $str, $dtok, $raw, $result, $dtfi, $styles){}
	/**
	 * @param \System\__DTString& $str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyValidPunctuation($str){}
	/**
	 * @param \System\String|string $datePattern
	 * @param \System\Int32& $order
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetYearMonthDayOrder($datePattern, $order){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32& $order
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetYearMonthOrder($pattern, $order){}
	/**
	 * @param \System\String|string $pattern
	 * @param \System\Int32& $order
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMonthDayOrder($pattern, $order){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Int32|int $year
	 * @param \System\Int32& $adjustedYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryAdjustYear($result, $year, $adjustedYear){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDateYMD($result, $year, $month, $day){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $year
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDateMDY($result, $month, $day, $year){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $year
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDateDMY($result, $day, $month, $year){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $month
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetDateYDM($result, $year, $day, $month){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultYear($result, $styles){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfNN($result, $styles, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfNNN($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfMN($result, $styles, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHebrewDayOfNM($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfNM($result, $styles, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfMNN($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfYNN($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfNNY($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfYMN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfYN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDayOfYM($result, $raw){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustTimeMark($dtfi, $raw){}
	/**
	 * @param \System\Int32& $hour
	 * @param \System\TM $timeMark
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustHour($hour, $timeMark){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeOfN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeOfNN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeOfNNN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateOfDSN($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateOfNDS($result, $raw){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateOfNNDS($result, $raw, $dtfi){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\DateTimeToken& $dtok
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ProcessDateTimeSuffix($result, $raw, $dtok){}
	/**
	 * @param \System\DS $dps
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Boolean
	 */
	protected static function ProcessHebrewTerminalState($dps, $result, $styles, $raw, $dtfi){}
	/**
	 * @param \System\DS $dps
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\Boolean
	 */
	protected static function ProcessTerminalState($dps, $result, $styles, $raw, $dtfi){}
	/**
	 * @uses DateTimeParseMethodsOverride::Parse_1 ($s, $dtfi, $styles)
	 * @uses DateTimeParseMethodsOverride::Parse_2 ($s, $dtfi, $styles, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses DateTimeParseMethodsOverride::TryParse_1 ($s, $dtfi, $styles, $result)
	 * @uses DateTimeParseMethodsOverride::TryParse_2 ($s, $dtfi, $styles, $result, $offset)
	 * @uses DateTimeParseMethodsOverride::TryParse_3 ($s, $dtfi, $styles, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\Boolean $bTimeOnly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DetermineTimeZoneAdjustments($result, $styles, $bTimeOnly){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DateTimeOffsetTimeZonePostProcessing($result, $styles){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustTimeZoneToUniversal($result){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Boolean $bTimeOnly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustTimeZoneToLocal($result, $bTimeOnly){}
	/**
	 * @param \System\DateTimeRawInfo& $raw
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseISO8601($raw, $str, $styles, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $digitLen
	 * @param \System\Int32& $number
	 * @return \System\Boolean
	 */
	protected static function MatchHebrewDigits($str, $digitLen, $number){}
	/**
	 * @uses DateTimeParseMethodsOverride::ParseDigits_1 ($str, $digitLen, $result)
	 * @uses DateTimeParseMethodsOverride::ParseDigits_2 ($str, $minDigitLen, $maxDigitLen, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseDigits(mixed ...$args){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $maxDigitLen
	 * @param \System\Double& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFractionExact($str, $maxDigitLen, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Boolean& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseSign($str, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Int32|int $len
	 * @param \System\TimeSpan& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseTimeZoneOffset($str, $len, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchAbbreviatedMonthName($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchMonthName($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchAbbreviatedDayName($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchDayName($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchEraName($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\TM& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchTimeMark($str, $dtfi, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\TM& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchAbbreviatedTimeMark($str, $dtfi, $result){}
	/**
	 * @param \System\Int32& $currentValue
	 * @param \System\Int32|int $newValue
	 * @param \System\Char $patternChar
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckNewValue($currentValue, $newValue, $patternChar, $result){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\DateTimeStyles& $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateTimeNow($result, $styles){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @param \System\Globalization\Calendar& $cal
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckDefaultDateTime($result, $cal, $styles){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\DateTimeFormatInfo& $dtfi
	 * @param \System\ParsingInfo& $parseInfo
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExpandPredefinedFormat($format, $dtfi, $parseInfo, $result){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseJapaneseEraStart($str, $dtfi){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo& $dtfi
	 * @param \System\ParsingInfo& $parseInfo
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConfigureFormatR($dtfi, $parseInfo, $result){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo& $dtfi
	 * @param \System\ParsingInfo& $parseInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConfigureFormatOS($dtfi, $parseInfo){}
	/**
	 * @param \System\__DTString& $str
	 * @param \System\__DTString& $format
	 * @param \System\ParsingInfo& $parseInfo
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseByFormat($str, $format, $parseInfo, $dtfi, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $pos
	 * @param \System\Text\ValueStringBuilder& $result
	 * @param \System\Int32& $returnValue
	 * @return \System\Boolean
	 */
	protected static function TryParseQuoteString($format, $pos, $result, $returnValue){}
	/**
	 * @param \System\ReadOnlySpan_1 $s
	 * @param \System\ReadOnlySpan_1 $formatParam
	 * @param \System\Globalization\DateTimeStyles $styles
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DoStrictParse($s, $formatParam, $styles, $dtfi, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ParsingInfo& $parseInfo
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFormatR($source, $parseInfo, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseFormatO($source, $result){}
	/**
	 * @param \System\DateTimeResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateTimeParseException($result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
