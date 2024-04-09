<?php
namespace System\Collections\Generic;
final class ArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \T|object
	 */
	public function First(){}
	/**
	 * @return \T|object
	 */
	public function Last(){}
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function UncheckedAdd($item){}
	private function EnsureCapacity($minimum){}
}