<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncoderFallbackBufferOverride {
	/**
	 * @deprecated
	 * @param \System\Char $charUnknown
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Fallback_1 ($charUnknown, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $charUnknownHigh
	 * @param \System\Char $charUnknownLow
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Fallback_2 ($charUnknownHigh, $charUnknownLow, $index){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function InternalFallback_1 ($chars, &$charsConsumed){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @param \System\Char*& $chars
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function InternalFallback_2 ($ch, $chars){}
}
class EncoderFallbackBuffer extends \System\Object
{
	use EncoderFallbackBufferOverride;

	/**
	 * @field
	 * @var \System\Char*
	 */
	protected $charStart;
	/**
	 * @field
	 * @var \System\Char*
	 */
	protected $charEnd;
	/**
	 * @field
	 * @var \System\Text\EncoderNLS
	 */
	protected $encoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $setEncoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $bUsedEncoder;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $bFallingBack;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $iRecursionCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Remaining;
	/**
	 * @uses EncoderFallbackBufferOverride::Fallback_1 <br>public , args: ($charUnknown, $index)<br>
	 * @uses EncoderFallbackBufferOverride::Fallback_2 <br>public , args: ($charUnknownHigh, $charUnknownLow, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Fallback (\override ...$args){}
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
	 * @param \System\Char* $charStart
	 * @param \System\Char* $charEnd
	 * @param \System\Text\EncoderNLS $encoder
	 * @param \System\Boolean|bool $setEncoder
	 * @return \System\Void|void
	 */
	protected function InternalInitialize($charStart, $charEnd, $encoder, $setEncoder){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Text\EncoderNLS $encoder
	 * @param \System\Int32|int $originalCharCount
	 * @return \System\Text\EncoderFallbackBuffer
	 */
	protected static function CreateAndInitialize($encoding, $encoder, $originalCharCount){}
	/**
	 * @return \System\Char
	 */
	protected function InternalGetNextChar(){}
	/**
	 * @uses EncoderFallbackBufferOverride::InternalFallback_1 <br>private , args: ($chars, &$charsConsumed)<br>
	 * @uses EncoderFallbackBufferOverride::InternalFallback_2 <br>protected , args: ($ch, $chars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function InternalFallback (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Int32|int
	 */
	protected function InternalFallbackGetByteCount($chars, &$charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$charsConsumed
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	protected function TryInternalFallbackGetBytes($chars, $bytes, &$charsConsumed, &$bytesWritten){}
	/**
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	protected function TryDrainRemainingDataForGetBytes($bytes, &$bytesWritten){}
	/**
	 * @return \System\Int32|int
	 */
	protected function DrainRemainingDataForGetByteCount(){}
	private function GetNextRune(){}
	/**
	 * @param \System\Int32|int $charRecursive
	 * @return \System\Void|void
	 */
	protected static function ThrowLastCharRecursive($charRecursive){}
}