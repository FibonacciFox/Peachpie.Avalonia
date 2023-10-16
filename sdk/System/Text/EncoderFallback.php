<?php
namespace System\Text;
/**
 */
class EncoderFallback extends \System\Object
{
	/**
	 * @var \System\Text\EncoderFallback
	 * @property
	 */
	public readonly $ReplacementFallback;
	/**
	 * @var \System\Text\EncoderFallback
	 * @property
	 */
	public readonly $ExceptionFallback;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxCharCount;
	/**
	 * @return \System\Text\EncoderFallback
	 */
	public static function get_ReplacementFallback(){}
	/**
	 * @return \System\Text\EncoderFallback
	 */
	public static function get_ExceptionFallback(){}
	/**
	 * @return \System\Text\EncoderFallbackBuffer
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
