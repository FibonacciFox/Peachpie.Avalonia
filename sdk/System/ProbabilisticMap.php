<?php
namespace System;
/**
 */
class ProbabilisticMap extends \System\ValueType
{
	/**
	 * @param \System\UInt32* $charMap
	 * @param \System\ReadOnlySpan_1 $values
	 * @return \System\Void|void
	 */
	public static function Initialize($charMap, $values){}
	/**
	 * @param \System\UInt32* $charMap
	 * @param \System\Byte $value
	 * @return \System\Boolean
	 */
	public static function IsCharBitSet($charMap, $value){}
	/**
	 * @param \System\UInt32* $charMap
	 * @param \System\Byte $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetCharBit($charMap, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $span
	 * @param \System\Char $searchChar
	 * @return \System\Boolean
	 */
	public static function SpanContains($span, $searchChar){}
}
