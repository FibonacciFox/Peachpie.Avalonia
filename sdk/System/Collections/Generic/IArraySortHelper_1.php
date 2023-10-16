<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IArraySortHelper_1
{
	/**
	 * @param \System\Span_1 $keys
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 */
	public function Sort($keys, $comparer);
	/**
	 * @param \System\Collections\Generic\TKey[] $keys
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $length
	 * @param \System\Collections\Generic\TKey $value
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 */
	public function BinarySearch($keys, $index, $length, $value, $comparer);
}
