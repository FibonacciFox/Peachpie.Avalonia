<?php
namespace System\Collections\Generic;
interface IArraySortHelper_1
{


	/**
	 * @param \System\Span_1 $keys [generic: TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	public function Sort($keys, $comparer);
	/**
	 * @param \TKey $keys
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \TKey $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Int32|int
	 */
	public function BinarySearch($keys, $index, $length, $value, $comparer);
}