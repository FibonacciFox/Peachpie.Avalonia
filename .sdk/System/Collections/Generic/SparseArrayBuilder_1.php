<?php
namespace System\Collections\Generic;
final class SparseArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\ArrayBuilder_1[System\Collections\Generic\Marker]
	 * @since readonly
	 */
	public $Markers;
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Void|void
	 */
	public function AddRange($items){}
	/**
	 * @param \T $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex, $count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function Reserve($count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: T]
	 * @return \System\Boolean|bool
	 */
	public function ReserveOrAdd($items){}
	/**
	 * @return \T[]
	 */
	public function ToArray(){}
	/**
	 */
	public function __construct(){}
}