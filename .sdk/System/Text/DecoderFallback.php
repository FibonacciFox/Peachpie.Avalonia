<?php
namespace System\Text;
class DecoderFallback extends \System\Object
{

	/**
	 * @property
	 * @var \System\Text\DecoderFallback
	 * @since readonly
	 */
	public $ReplacementFallback;
	/**
	 * @property
	 * @var \System\Text\DecoderFallback
	 * @since readonly
	 */
	public $ExceptionFallback;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxCharCount;
	/**
	 * @return \System\Text\DecoderFallbackBuffer
	 */
	abstract public function CreateFallbackBuffer();
}