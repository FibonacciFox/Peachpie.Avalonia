<?php
namespace System\Text;
final class Encoder extends \System\Text\EncoderNLS
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $bits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $bitCount;
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
	 * @param \System\Text\UTF7Encoding $encoding
	 */
	public function __construct($encoding){}
}