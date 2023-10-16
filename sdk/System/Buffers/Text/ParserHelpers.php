<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ParserHelpersMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseThrowFormatException_1($bytesConsumed){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseThrowFormatException_2($value, $bytesConsumed){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseThrowFormatException_3($_, $value, $bytesConsumed){}
}
/**
 */
class ParserHelpers extends \System\Object
{
	/**
	 * @param \System\Int32|int $i
	 * @return \System\Boolean
	 */
	public static function IsDigit($i){}
	/**
	 * @uses ParserHelpersMethodsOverride::TryParseThrowFormatException_1 ($bytesConsumed)
	 * @uses ParserHelpersMethodsOverride::TryParseThrowFormatException_2 ($value, $bytesConsumed)
	 * @uses ParserHelpersMethodsOverride::TryParseThrowFormatException_3 ($_, $value, $bytesConsumed)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseThrowFormatException(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
