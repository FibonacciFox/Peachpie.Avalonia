<?php
namespace System\Collections\Generic;
final class Marker extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Index;
	/**
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $index
	 */
	public function __construct($count, $index){}
}