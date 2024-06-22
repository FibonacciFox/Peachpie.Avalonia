<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeFormatOverride {
	/**
	 * @deprecated
	 * @param \System\Text\ValueStringBuilder& $outputBuffer
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $len
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function FormatDigits_1 ($outputBuffer, $value, $len){}
	/**
	 * @deprecated
	 * @param \System\Text\ValueStringBuilder& $outputBuffer
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $len
	 * @param \System\Boolean|bool $overrideLengthLimit
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function FormatDigits_2 ($outputBuffer, $value, $len, $overrideLengthLimit){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function Format_1 ($dateTime, $format, $provider){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\TimeSpan $offset
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function Format_2 ($dateTime, $format, $provider, $offset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryFormat_1 ($dateTime, $destination, &$charsWritten, $format, $provider){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\TimeSpan $offset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function TryFormat_2 ($dateTime, $destination, &$charsWritten, $format, $provider, $offset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Char $format
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\String
	 */
	#[MethodOverride]protected static function GetAllDateTimes_1 ($dateTime, $format, $dtfi){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\String
	 */
	#[MethodOverride]protected static function GetAllDateTimes_2 ($dateTime, $dtfi){}
}
class DateTimeFormat extends \System\Object
{
	use DateTimeFormatOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\DateTimeFormatInfo
	 */
	protected static $InvariantFormatInfo;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String[]|array
	 */
	protected static $InvariantAbbreviatedMonthNames;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String[]|array
	 */
	protected static $InvariantAbbreviatedDayNames;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected static $fixedNumberFormats;
	/**
	 * @uses DateTimeFormatOverride::FormatDigits_1 <br>protected , args: ($outputBuffer, $value, $len)<br>
	 * @uses DateTimeFormatOverride::FormatDigits_2 <br>protected , args: ($outputBuffer, $value, $len, $overrideLengthLimit)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function FormatDigits (\override ...$args){}
	private static function HebrewFormatDigits($outputBuffer, $digits){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Int32|int $pos
	 * @param \System\Char $patternChar
	 * @return \System\Int32|int
	 */
	protected static function ParseRepeatPattern($format, $pos, $patternChar){}
	private static function FormatDayOfWeek($dayOfWeek, $repeat, $dtfi){}
	private static function FormatMonth($month, $repeatCount, $dtfi){}
	private static function FormatHebrewMonthName($time, $month, $repeatCount, $dtfi){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Int32|int $pos
	 * @param \System\Text\ValueStringBuilder& $result
	 * @return \System\Int32|int
	 */
	protected static function ParseQuoteString($format, $pos, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Int32|int $pos
	 * @return \System\Int32|int
	 */
	protected static function ParseNextChar($format, $pos){}
	private static function IsUseGenitiveForm($format, $index, $tokenLen, $patternToMatch){}
	private static function FormatCustomized($dateTime, $format, $dtfi, $offset, $result){}
	private static function FormatCustomizedTimeZone($dateTime, $offset, $tokenLen, $timeOnly, $result){}
	private static function FormatCustomizedRoundripTimeZone($dateTime, $offset, $result){}
	private static function Append2DigitNumber($result, $val){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\String|string
	 */
	protected static function GetRealFormat($format, $dtfi){}
	private static function ExpandPredefinedFormat($format, $dateTime, $dtfi, $offset){}
	/**
	 * @uses DateTimeFormatOverride::Format_1 <br>protected , args: ($dateTime, $format, $provider)<br>
	 * @uses DateTimeFormatOverride::Format_2 <br>protected , args: ($dateTime, $format, $provider, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function Format (\override ...$args){}
	/**
	 * @uses DateTimeFormatOverride::TryFormat_1 <br>protected , args: ($dateTime, $destination, &$charsWritten, $format, $provider)<br>
	 * @uses DateTimeFormatOverride::TryFormat_2 <br>protected , args: ($dateTime, $destination, &$charsWritten, $format, $provider, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function TryFormat (\override ...$args){}
	private static function FormatStringBuilder($dateTime, $format, $dtfi, $offset, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidCustomDateFormat($format, $throwOnError){}
	/**
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidCustomTimeFormat($format, $throwOnError){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int64|int $fraction
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function TryFormatTimeOnlyO($hour, $minute, $second, $fraction, $destination){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function TryFormatTimeOnlyR($hour, $minute, $second, $destination){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function TryFormatDateOnlyO($year, $month, $day, $destination){}
	/**
	 * @param \System\DayOfWeek $dayOfWeek
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function TryFormatDateOnlyR($dayOfWeek, $year, $month, $day, $destination){}
	private static function TryFormatO($dateTime, $offset, $destination, &$charsWritten){}
	private static function TryFormatR($dateTime, $offset, $destination, &$charsWritten){}
	private static function WriteTwoDecimalDigits($value, $destination, $offset){}
	private static function WriteFourDecimalDigits($value, $buffer, $startingIndex){}
	private static function WriteDigits($value, $buffer){}
	/**
	 * @uses DateTimeFormatOverride::GetAllDateTimes_1 <br>protected , args: ($dateTime, $format, $dtfi)<br>
	 * @uses DateTimeFormatOverride::GetAllDateTimes_2 <br>protected , args: ($dateTime, $dtfi)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverrideProtected]function GetAllDateTimes (\override ...$args){}
}