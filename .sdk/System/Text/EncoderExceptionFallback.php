<?php
namespace System\Text;
final class EncoderExceptionFallback extends \System\Text\EncoderFallback
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\EncoderExceptionFallback
	 */
	protected static $s_default;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxCharCount;
	/**
	 */
	public function __construct(){}
}