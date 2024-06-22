<?php
namespace System\Text;
class DecoderNLS extends \System\Text\Decoder
{

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_throwOnOverflow;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_bytesUsed;
	/**
	 * @field
	 * @var \System\Text\DecoderFallback
	 */
	protected $_fallback;
	/**
	 * @field
	 * @var \System\Text\DecoderFallbackBuffer
	 */
	protected $_fallbackBuffer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $MustFlush;
	/**
	 * @property
	 * @var \System\Text\DecoderFallback
	 */
	public $Fallback;
	/**
	 * @property
	 * @var \System\Text\DecoderFallbackBuffer
	 * @since readonly
	 */
	public $FallbackBuffer;
	/**
	 * @return \System\Void|void
	 */
	protected function ClearMustFlush(){}
	/**
	 * @return \System\ReadOnlySpan_1[System\Byte]
	 */
	protected function GetLeftoverData(){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @return \System\Void|void
	 */
	protected function SetLeftoverData($bytes){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearLeftoverData(){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Int32|int
	 */
	protected function DrainLeftoverDataForGetCharCount($bytes, &$bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Int32|int
	 */
	protected function DrainLeftoverDataForGetChars($bytes, $chars, &$bytesConsumed){}
	private static function ConcatInto($srcLeft, $srcRight, $dest){}
}