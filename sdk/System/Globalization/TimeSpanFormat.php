<?php
namespace System\Globalization;
/**
 */
class TimeSpanFormat extends \System\Object
{
	/**
	 * @var \System\Globalization\TimeSpanFormat+FormatLiterals
	 * @field
	 */
	protected readonly $PositiveInvariantFormatLiterals;
	/**
	 * @var \System\Globalization\TimeSpanFormat+FormatLiterals
	 * @field
	 */
	protected readonly $NegativeInvariantFormatLiterals;
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	protected static function Format($value, $format, $formatProvider){}
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Boolean
	 */
	protected static function TryFormat($value, $destination, $charsWritten, $format, $formatProvider){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\String|string
	 */
	protected static function FormatC($value){}
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Globalization\StandardFormat $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatG($value, $dtfi, $format){}
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\Globalization\StandardFormat $format
	 * @param \System\String|string $decimalSeparator
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryFormatStandard($value, $format, $decimalSeparator, $destination, $charsWritten){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteTwoDigits($value, $buffer){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteDigits($value, $buffer){}
	/**
	 * @param \System\TimeSpan $value
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\Globalization\DateTimeFormatInfo $dtfi
	 * @param \System\Text\ValueStringBuilder& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatCustomized($value, $format, $dtfi, $result){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
