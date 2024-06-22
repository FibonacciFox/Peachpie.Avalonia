<?php
namespace System\Collections\Generic;
final class Entry extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $HashCode;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $Next;
	/**
	 * @field
	 * @var \T|object
	 */
	public $Value;

}