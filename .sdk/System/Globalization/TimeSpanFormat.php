<?php
namespace System\Globalization;
class TimeSpanFormat extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\TimeSpanFormat+FormatLiterals
	 */
	protected static $PositiveInvariantFormatLiterals;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Globalization\TimeSpanFormat+FormatLiterals
	 */
	protected static $NegativeInvariantFormatLiterals;
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	protected static function Format($value, $format, $formatProvider){}
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Boolean|bool
	 */
	protected static function TryFormat($value, $destination, &$charsWritten, $format, $formatProvider){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\String|string
	 */
	protected static function FormatC($value){}
	private static function FormatG($value, $dtfi, $format){}
	private static function TryFormatStandard($value, $format, $decimalSeparator, $destination, &$charsWritten){}
	private static function WriteTwoDigits($value, $buffer){}
	private static function WriteDigits($value, $buffer){}
	private static function FormatCustomized($value, $format, $dtfi, $result){}
}