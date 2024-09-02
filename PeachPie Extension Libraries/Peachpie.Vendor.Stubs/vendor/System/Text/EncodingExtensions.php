<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Byte]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function GetBytes_1 ($encoding, $chars, $writer){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$chars [generic: System\Char]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Byte]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function GetBytes_2 ($encoding, &$chars, $writer){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$chars [generic: System\Char]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetBytes_3 ($encoding, &$chars, $bytes){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$chars [generic: System\Char]
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function GetBytes_4 ($encoding, &$chars){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Char]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function GetChars_1 ($encoding, $bytes, $writer){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$bytes [generic: System\Byte]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Char]
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function GetChars_2 ($encoding, &$bytes, $writer){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$bytes [generic: System\Byte]
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetChars_3 ($encoding, &$bytes, $chars){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoder $encoder
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Byte]
	 * @param \System\Boolean|bool $flush
	 * @param \System\Int64& &$bytesUsed
	 * @param \System\Boolean& &$completed
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Convert_1 ($encoder, $chars, $writer, $flush, &$bytesUsed, &$completed){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoder $encoder
	 * @param \System\Buffers\ReadOnlySequence_1 &$chars [generic: System\Char]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Byte]
	 * @param \System\Boolean|bool $flush
	 * @param \System\Int64& &$bytesUsed
	 * @param \System\Boolean& &$completed
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Convert_2 ($encoder, &$chars, $writer, $flush, &$bytesUsed, &$completed){}
	/**
	 * @deprecated
	 * @param \System\Text\Decoder $decoder
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Char]
	 * @param \System\Boolean|bool $flush
	 * @param \System\Int64& &$charsUsed
	 * @param \System\Boolean& &$completed
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Convert_3 ($decoder, $bytes, $writer, $flush, &$charsUsed, &$completed){}
	/**
	 * @deprecated
	 * @param \System\Text\Decoder $decoder
	 * @param \System\Buffers\ReadOnlySequence_1 &$bytes [generic: System\Byte]
	 * @param \System\Buffers\IBufferWriter_1 $writer [generic: System\Char]
	 * @param \System\Boolean|bool $flush
	 * @param \System\Int64& &$charsUsed
	 * @param \System\Boolean& &$completed
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Convert_4 ($decoder, &$bytes, $writer, $flush, &$charsUsed, &$completed){}
}
class EncodingExtensions extends \System\Object
{
	use EncodingExtensionsOverride;

	/**
	 * @uses EncodingExtensionsOverride::GetBytes_1 <br>public , args: ($encoding, $chars, $writer)<br>
	 * @uses EncodingExtensionsOverride::GetBytes_2 <br>public , args: ($encoding, &$chars, $writer)<br>
	 * @uses EncodingExtensionsOverride::GetBytes_3 <br>public , args: ($encoding, &$chars, $bytes)<br>
	 * @uses EncodingExtensionsOverride::GetBytes_4 <br>public , args: ($encoding, &$chars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|\System\Int32|int|\System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function GetBytes (\override ...$args){}
	/**
	 * @uses EncodingExtensionsOverride::GetChars_1 <br>public , args: ($encoding, $bytes, $writer)<br>
	 * @uses EncodingExtensionsOverride::GetChars_2 <br>public , args: ($encoding, &$bytes, $writer)<br>
	 * @uses EncodingExtensionsOverride::GetChars_3 <br>public , args: ($encoding, &$bytes, $chars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetChars (\override ...$args){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Buffers\ReadOnlySequence_1 &$bytes [generic: System\Byte]
	 * @return \System\String|string
	 */
	public static function GetString($encoding, &$bytes){}
	/**
	 * @uses EncodingExtensionsOverride::Convert_1 <br>public , args: ($encoder, $chars, $writer, $flush, &$bytesUsed, &$completed)<br>
	 * @uses EncodingExtensionsOverride::Convert_2 <br>public , args: ($encoder, &$chars, $writer, $flush, &$bytesUsed, &$completed)<br>
	 * @uses EncodingExtensionsOverride::Convert_3 <br>public , args: ($decoder, $bytes, $writer, $flush, &$charsUsed, &$completed)<br>
	 * @uses EncodingExtensionsOverride::Convert_4 <br>public , args: ($decoder, &$bytes, $writer, $flush, &$charsUsed, &$completed)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Convert (\override ...$args){}
}