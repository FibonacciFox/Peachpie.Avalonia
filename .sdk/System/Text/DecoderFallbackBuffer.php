<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DecoderFallbackBufferOverride {
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Byte* $pBytes
	 * @param \System\Char*& $chars
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function InternalFallback_1 ($bytes, $pBytes, $chars){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Byte* $pBytes
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function InternalFallback_2 ($bytes, $pBytes){}
}
class DecoderFallbackBuffer extends \System\Object
{
	use DecoderFallbackBufferOverride;

	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $byteStart;
	/**
	 * @field
	 * @var \System\Char*
	 */
	protected $charEnd;
	/**
	 * @field
	 * @var \System\Text\Encoding
	 */
	protected $_encoding;
	/**
	 * @field
	 * @var \System\Text\DecoderNLS
	 */
	protected $_decoder;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Remaining;
	/**
	 * @param \System\Byte $bytesUnknown
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	abstract public function Fallback($bytesUnknown, $index);
	/**
	 * @return \System\Char
	 */
	abstract public function GetNextChar();
	/**
	 * @return \System\Boolean|bool
	 */
	abstract public function MovePrevious();
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InternalReset(){}
	/**
	 * @param \System\Byte* $byteStart
	 * @param \System\Char* $charEnd
	 * @return \System\Void|void
	 */
	protected function InternalInitialize($byteStart, $charEnd){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Text\DecoderNLS $decoder
	 * @param \System\Int32|int $originalByteCount
	 * @return \System\Text\DecoderFallbackBuffer
	 */
	protected static function CreateAndInitialize($encoding, $decoder, $originalByteCount){}
	/**
	 * @uses DecoderFallbackBufferOverride::InternalFallback_1 <br>protected , args: ($bytes, $pBytes, $chars)<br>
	 * @uses DecoderFallbackBufferOverride::InternalFallback_2 <br>protected , args: ($bytes, $pBytes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function InternalFallback (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $remainingBytes [generic: System\Byte]
	 * @param \System\Int32|int $fallbackLength
	 * @return \System\Int32|int
	 */
	protected function InternalFallbackGetCharCount($remainingBytes, $fallbackLength){}
	/**
	 * @param \System\ReadOnlySpan_1 $remainingBytes [generic: System\Byte]
	 * @param \System\Int32|int $fallbackLength
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	protected function TryInternalFallbackGetChars($remainingBytes, $fallbackLength, $chars, &$charsWritten){}
	private function GetNextRune(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function DrainRemainingDataForGetCharCount(){}
	/**
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	protected function TryDrainRemainingDataForGetChars($chars, &$charsWritten){}
	/**
	 * @param \System\Byte $bytesUnknown
	 * @return \System\Void|void
	 */
	protected static function ThrowLastBytesRecursive($bytesUnknown){}
}