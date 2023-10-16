<?php
namespace System;
/**
 */
class FixedBufferExtensions extends \System\Object
{
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @return \System\String|string
	 */
	protected static function GetStringFromFixedBuffer($span){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @return \System\Int32|int
	 */
	protected static function GetFixedBufferStringLength($span){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	protected static function FixedBufferEqualsString($span, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
