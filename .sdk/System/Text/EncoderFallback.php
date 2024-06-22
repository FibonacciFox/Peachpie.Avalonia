<?php
namespace System\Text;
class EncoderFallback extends \System\Object
{

	/**
	 * @property
	 * @var \System\Text\EncoderFallback
	 * @since readonly
	 */
	public $ReplacementFallback;
	/**
	 * @property
	 * @var \System\Text\EncoderFallback
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
	 * @return \System\Text\EncoderFallbackBuffer
	 */
	abstract public function CreateFallbackBuffer();
}