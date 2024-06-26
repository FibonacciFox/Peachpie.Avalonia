<?php
namespace System\Text;
final class DecoderReplacementFallbackBuffer extends \System\Text\DecoderFallbackBuffer
{
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
	 * @param \System\Text\DecoderReplacementFallback $fallback
	 */
	public function __construct($fallback){}
}