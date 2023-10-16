<?php
namespace System\Text;
/**
 */
class EncoderReplacementFallback extends \System\Text\EncoderFallback
{
	/**
	 * @var \System\Text\EncoderReplacementFallback
	 * @field
	 */
	protected readonly $s_default;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DefaultString;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxCharCount;
	/**
	 * @return \System\String|string
	 */
	public  function get_DefaultString(){}
}
