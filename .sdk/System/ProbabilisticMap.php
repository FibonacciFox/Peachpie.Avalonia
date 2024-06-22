<?php
namespace System;
final class ProbabilisticMap extends \System\ValueType
{


	/**
	 * @param \System\UInt32* $charMap
	 * @param \System\ReadOnlySpan_1 $values [generic: System\Char]
	 * @return \System\Void|void
	 */
	public static function Initialize($charMap, $values){}
	/**
	 * @param \System\UInt32* $charMap
	 * @param \System\Byte $value
	 * @return \System\Boolean|bool
	 */
	public static function IsCharBitSet($charMap, $value){}
	private static function SetCharBit($charMap, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $span [generic: System\Char]
	 * @param \System\Char $searchChar
	 * @return \System\Boolean|bool
	 */
	public static function SpanContains($span, $searchChar){}
}