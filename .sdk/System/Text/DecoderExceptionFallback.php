<?php
namespace System\Text;
final class DecoderExceptionFallback extends \System\Text\DecoderFallback
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Text\DecoderExceptionFallback
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