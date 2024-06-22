<?php
namespace System\Text;
final class DefaultDecoder extends \System\Text\Decoder implements
	\System\Runtime\Serialization\IObjectReference
{

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
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public function GetRealObject($context){}
	/**
	 * @param \System\Text\Encoding $encoding
	 */
	public function __construct($encoding){}
}