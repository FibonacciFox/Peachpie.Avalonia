<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ParserHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseThrowFormatException_1 (&$bytesConsumed){}
	/**
	 * @deprecated
	 * @param \T& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseThrowFormatException_2 (&$value, &$bytesConsumed){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $_ [generic: System\Byte]
	 * @param \T& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseThrowFormatException_3 ($_, &$value, &$bytesConsumed){}
}
class ParserHelpers extends \System\Object
{
	use ParserHelpersOverride;


	/**
	 * @param \System\Int32|int $i
	 * @return \System\Boolean|bool
	 */
	public static function IsDigit($i){}
	/**
	 * @uses ParserHelpersOverride::TryParseThrowFormatException_1 <br>public , args: (&$bytesConsumed)<br>
	 * @uses ParserHelpersOverride::TryParseThrowFormatException_2 <br>public , args: (&$value, &$bytesConsumed)<br>
	 * @uses ParserHelpersOverride::TryParseThrowFormatException_3 <br>public , args: ($_, &$value, &$bytesConsumed)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseThrowFormatException (\override ...$args){}
}