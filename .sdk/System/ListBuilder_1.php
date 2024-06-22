<?php
namespace System;
final class ListBuilder_1 extends \System\ValueType
{

	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 * @param \System\Object $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	public function __construct($capacity){}
}