<?php
namespace System\Text;
/**
 */
class EncoderExceptionFallback extends \System\Text\EncoderFallback
{
	/**
	 * @var \System\Text\EncoderExceptionFallback
	 * @field
	 */
	protected readonly $s_default;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxCharCount;
}
