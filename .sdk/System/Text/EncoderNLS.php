<?php
namespace System\Text;
class EncoderNLS extends \System\Text\Encoder
{

	/**
	 * @field
	 * @var \System\Char
	 */
	protected $_charLeftOver;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_throwOnOverflow;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_charsUsed;
	/**
	 * @field
	 * @var \System\Text\EncoderFallback
	 */
	protected $_fallback;
	/**
	 * @field
	 * @var \System\Text\EncoderFallbackBuffer
	 */
	protected $_fallbackBuffer;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Encoding;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $MustFlush;
	/**
	 * @property
	 * @var \System\Text\EncoderFallback
	 */
	public $Fallback;
	/**
	 * @property
	 * @var \System\Text\EncoderFallbackBuffer
	 * @since readonly
	 */
	public $FallbackBuffer;
	/**
	 * @return \System\Void|void
	 */
	protected function ClearMustFlush(){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Int32|int
	 */
	protected function DrainLeftoverDataForGetByteCount($chars, &$charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$charsConsumed
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	protected function TryDrainLeftoverDataForGetBytes($chars, $bytes, &$charsConsumed, &$bytesWritten){}
}