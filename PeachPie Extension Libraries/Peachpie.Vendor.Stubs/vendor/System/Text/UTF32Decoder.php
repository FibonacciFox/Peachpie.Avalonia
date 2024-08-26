<?php
namespace System\Text;
final class UTF32Decoder extends \System\Text\DecoderNLS
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $iChar;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $readByteCount;
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
	 * @param \System\Text\UTF32Encoding $encoding
	 */
	public function __construct($encoding){}
}