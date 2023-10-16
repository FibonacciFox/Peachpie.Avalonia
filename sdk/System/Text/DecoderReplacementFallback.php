<?php
namespace System\Text;
/**
 */
class DecoderReplacementFallback extends \System\Text\DecoderFallback
{
	/**
	 * @var \System\Text\DecoderReplacementFallback
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
