<?php
namespace System\Text;
final class DefaultEncoder extends \System\Text\Encoder implements
	\System\Runtime\Serialization\IObjectReference
{

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
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public function GetRealObject($context){}
	/**
	 * @param \System\Text\Encoding $encoding
	 */
	public function __construct($encoding){}
}