<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeFormatMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function FormatDigits_1($outputBuffer, $value, $len){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function FormatDigits_2($outputBuffer, $value, $len, $overrideLengthLimit){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Format_1($dateTime, $format, $provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function Format_2($dateTime, $format, $provider, $offset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryFormat_1($dateTime, $destination, $charsWritten, $format, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function TryFormat_2($dateTime, $destination, $charsWritten, $format, $provider, $offset){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] protected static function GetAllDateTimes_1($dateTime, $format, $dtfi){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] protected static function GetAllDateTimes_2($dateTime, $dtfi){}
}
/**
 */
class DateTimeFormat extends \System\Object
{
	/**
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @field
	 */
	protected readonly $InvariantFormatInfo;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected readonly $InvariantAbbreviatedMonthNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected readonly $InvariantAbbreviatedDayNames;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $fixedNumberFormats;
	/**
	 * @uses DateTimeFormatMethodsOverride::FormatDigits_1 ($outputBuffer, $value, $len)
	 * @uses DateTimeFormatMethodsOverride::FormatDigits_2 ($outputBuffer, $value, $len, $overrideLengthLimit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FormatDigits(mixed ...$args){}
	/**
	 * @param \System\Text\ValueStringBuilder& $outputBuffer
	 * @param \System\Int32|int $digits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HebrewFormatDigits($outputBuffer, $digits){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $pos
	 * @param \System\Char $patternChar
	 * @return \System\Int32|int
	 */
	protected static function ParseRepeatPattern($format, $pos, $patternChar){}
	/**
	 * @param \System\Int32|int $dayOfWeek
	 * @param \System\Int32|int $repeat
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatDayOfWeek($dayOfWeek, $repeat, $dtfi){}
	/**
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $repeatCount
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatMonth($month, $repeatCount, $dtfi){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $repeatCount
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatHebrewMonthName($time, $month, $repeatCount, $dtfi){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $pos
	 * @param \System\Text\ValueStringBuilder& $result
	 * @return \System\Int32|int
	 */
	protected static function ParseQuoteString($format, $pos, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $pos
	 * @return \System\Int32|int
	 */
	protected static function ParseNextChar($format, $pos){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $tokenLen
	 * @param \System\Char $patternToMatch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsUseGenitiveForm($format, $index, $tokenLen, $patternToMatch){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\TimeSpan $offset
	 * @param \System\Text\ValueStringBuilder& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatCustomized($dateTime, $format, $dtfi, $offset, $result){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 * @param \System\Int32|int $tokenLen
	 * @param \System\Boolean $timeOnly
	 * @param \System\Text\ValueStringBuilder& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatCustomizedTimeZone($dateTime, $offset, $tokenLen, $timeOnly, $result){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 * @param \System\Text\ValueStringBuilder& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatCustomizedRoundripTimeZone($dateTime, $offset, $result){}
	/**
	 * @param \System\Text\ValueStringBuilder& $result
	 * @param \System\Int32|int $val
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Append2DigitNumber($result, $val){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @return \System\String|string
	 */
	protected static function GetRealFormat($format, $dtfi){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\DateTime& $dateTime
	 * @param \System\Globalization\DateTimeFormatInfo& $dtfi
	 * @param \System\TimeSpan $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExpandPredefinedFormat($format, $dateTime, $dtfi, $offset){}
	/**
	 * @uses DateTimeFormatMethodsOverride::Format_1 ($dateTime, $format, $provider)
	 * @uses DateTimeFormatMethodsOverride::Format_2 ($dateTime, $format, $provider, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Format(mixed ...$args){}
	/**
	 * @uses DateTimeFormatMethodsOverride::TryFormat_1 ($dateTime, $destination, $charsWritten, $format, $provider)
	 * @uses DateTimeFormatMethodsOverride::TryFormat_2 ($dateTime, $destination, $charsWritten, $format, $provider, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryFormat(mixed ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\TimeSpan $offset
	 * @param \System\Text\ValueStringBuilder& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatStringBuilder($dateTime, $format, $dtfi, $offset, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Boolean $throwOnError
	 * @return \System\Boolean
	 */
	protected static function IsValidCustomDateFormat($format, $throwOnError){}
	/**
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Boolean $throwOnError
	 * @return \System\Boolean
	 */
	protected static function IsValidCustomTimeFormat($format, $throwOnError){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int64|int $fraction
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	protected static function TryFormatTimeOnlyO($hour, $minute, $second, $fraction, $destination){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	protected static function TryFormatTimeOnlyR($hour, $minute, $second, $destination){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	protected static function TryFormatDateOnlyO($year, $month, $day, $destination){}
	/**
	 * @param \System\DayOfWeek $dayOfWeek
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	protected static function TryFormatDateOnlyR($dayOfWeek, $year, $month, $day, $destination){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryFormatO($dateTime, $offset, $destination, $charsWritten){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $offset
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryFormatR($dateTime, $offset, $destination, $charsWritten){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $destination
	 * @param \System\Int32|int $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteTwoDecimalDigits($value, $destination, $offset){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $startingIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteFourDecimalDigits($value, $buffer, $startingIndex){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteDigits($value, $buffer){}
	/**
	 * @uses DateTimeFormatMethodsOverride::GetAllDateTimes_1 ($dateTime, $format, $dtfi)
	 * @uses DateTimeFormatMethodsOverride::GetAllDateTimes_2 ($dateTime, $dtfi)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetAllDateTimes(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
