<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FormattingHelpersMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CountDigits_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CountDigits_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CountDigits_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CountHexDigits_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CountHexDigits_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteDigits_1($value, $buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteDigits_2($value, $buffer){}
}
/**
 */
class FormattingHelpers extends \System\Object
{
	/**
	 * @uses FormattingHelpersMethodsOverride::CountDigits_1 ($value)
	 * @uses FormattingHelpersMethodsOverride::CountDigits_2 ($value)
	 * @uses FormattingHelpersMethodsOverride::CountDigits_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CountDigits(mixed ...$args){}
	/**
	 * @uses FormattingHelpersMethodsOverride::CountHexDigits_1 ($value)
	 * @uses FormattingHelpersMethodsOverride::CountHexDigits_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CountHexDigits(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32& $valueWithoutTrailingZeros
	 * @return \System\Int32|int
	 */
	public static function CountDecimalTrailingZeros($value, $valueWithoutTrailingZeros){}
	/**
	 * @param \System\Buffers\StandardFormat& $format
	 * @param \System\Char $defaultSymbol
	 * @return \System\Char
	 */
	public static function GetSymbolOrDefault($format, $defaultSymbol){}
	/**
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	public static function FillWithAsciiZeros($buffer){}
	/**
	 * @uses FormattingHelpersMethodsOverride::WriteDigits_1 ($value, $buffer)
	 * @uses FormattingHelpersMethodsOverride::WriteDigits_2 ($value, $buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteDigits(mixed ...$args){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	public static function WriteDigitsWithGroupSeparator($value, $buffer){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $startingIndex
	 * @return \System\Void|void
	 */
	public static function WriteFourDecimalDigits($value, $buffer, $startingIndex){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $startingIndex
	 * @return \System\Void|void
	 */
	public static function WriteTwoDecimalDigits($value, $buffer, $startingIndex){}
	/**
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Boolean
	 */
	public static function TryFormatThrowFormatException($bytesWritten){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
