<?php
namespace System;
final class DTSubString extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $s;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $index;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $length;
	/**
	 * @field
	 * @var \System\DTSubStringType
	 */
	protected $type;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $value;

}