<?php
namespace System;
class HexConverter extends \System\Object
{
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @since readonly
	 */
	public $CharToHexLookup;
	/**
	 * @param \System\Byte $value
	 * @param \System\Span_1 $buffer [generic: System\Char]
	 * @param \System\Int32|int $startingIndex
	 * @param \System\HexConverter+Casing $casing
	 * @return \System\Void|void
	 */
	public static function ToCharsBuffer($value, $buffer, $startingIndex, $casing){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Int32|int
	 */
	public static function FromChar($c){}
}