<?php
namespace System\Globalization;
/**
 */
class HebrewNumber extends \System\Object
{
	/**
	 * @param \System\Text\ValueStringBuilder& $outputBuffer
	 * @param \System\Int32|int $Number
	 * @return \System\Void|void
	 */
	protected static function Append($outputBuffer, $Number){}
	/**
	 * @param \System\Char $ch
	 * @param \System\Globalization\HebrewNumberParsingContext& $context
	 * @return \System\Globalization\HebrewNumberParsingState
	 */
	protected static function ParseByChar($ch, $context){}
	/**
	 * @param \System\Char $ch
	 * @return \System\Boolean
	 */
	protected static function IsDigit($ch){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
