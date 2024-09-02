<?php
namespace System\Buffers\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FormattingHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CountDigits_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CountDigits_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CountDigits_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt128 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CountHexDigits_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CountHexDigits_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteDigits_1 ($value, $buffer){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteDigits_2 ($value, $buffer){}
}
class FormattingHelpers extends \System\Object
{
	use FormattingHelpersOverride;

	/**
	 * @uses FormattingHelpersOverride::CountDigits_1 <br>public , args: ($value)<br>
	 * @uses FormattingHelpersOverride::CountDigits_2 <br>public , args: ($value)<br>
	 * @uses FormattingHelpersOverride::CountDigits_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CountDigits (\override ...$args){}
	/**
	 * @uses FormattingHelpersOverride::CountHexDigits_1 <br>public , args: ($value)<br>
	 * @uses FormattingHelpersOverride::CountHexDigits_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CountHexDigits (\override ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32& &$valueWithoutTrailingZeros
	 * @return \System\Int32|int
	 */
	public static function CountDecimalTrailingZeros($value, &$valueWithoutTrailingZeros){}
	/**
	 * @param \System\Buffers\StandardFormat& &$format
	 * @param \System\Char $defaultSymbol
	 * @return \System\Char
	 */
	public static function GetSymbolOrDefault(&$format, $defaultSymbol){}
	/**
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	public static function FillWithAsciiZeros($buffer){}
	/**
	 * @uses FormattingHelpersOverride::WriteDigits_1 <br>public , args: ($value, $buffer)<br>
	 * @uses FormattingHelpersOverride::WriteDigits_2 <br>public , args: ($value, $buffer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteDigits (\override ...$args){}
	/**
	 * @param \System\UInt64 $value
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @return \System\Void|void
	 */
	public static function WriteDigitsWithGroupSeparator($value, $buffer){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int32|int $startingIndex
	 * @return \System\Void|void
	 */
	public static function WriteFourDecimalDigits($value, $buffer, $startingIndex){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Span_1 $buffer [generic: System\Byte]
	 * @param \System\Int32|int $startingIndex
	 * @return \System\Void|void
	 */
	public static function WriteTwoDecimalDigits($value, $buffer, $startingIndex){}
	/**
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	public static function TryFormatThrowFormatException(&$bytesWritten){}
}