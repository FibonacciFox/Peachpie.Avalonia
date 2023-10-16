<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SparseArrayBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\ArrayBuilder_1[System\Collections\Generic\Marker]
	 * @property
	 */
	public readonly $Markers;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\Generic\ArrayBuilder_1
	 */
	public  function get_Markers(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function AddRange($items){}
	/**
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex, $count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function Reserve($count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Boolean
	 */
	public  function ReserveOrAdd($items){}
	/**
	 * @return \System\Collections\Generic\T[]
	 */
	public  function ToArray(){}
}
