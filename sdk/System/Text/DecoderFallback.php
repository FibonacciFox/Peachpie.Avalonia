<?php
namespace System\Text;
/**
 */
class DecoderFallback extends \System\Object
{
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public readonly $ReplacementFallback;
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public readonly $ExceptionFallback;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxCharCount;
	/**
	 * @return \System\Text\DecoderFallback
	 */
	public static function get_ReplacementFallback(){}
	/**
	 * @return \System\Text\DecoderFallback
	 */
	public static function get_ExceptionFallback(){}
	/**
	 * @return \System\Text\DecoderFallbackBuffer
	 */
	public  function CreateFallbackBuffer(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxCharCount(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
