<?php
namespace System;
/**
 */
class DTSubString extends \System\ValueType
{
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $s;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $index;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $length;
	/**
	 * @var \System\DTSubStringType
	 * @field
	 */
	protected $type;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $value;
	/**
	 * @param \System\Int32|int $relativeIndex
	 * @return \System\Char
	 */
	protected  function get_Item($relativeIndex){}
}
