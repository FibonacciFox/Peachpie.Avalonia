<?php
namespace System\Collections\Generic;
interface IArraySortHelper_2
{

	/**
	 * @param \System\Span_1 $keys [generic: TKey]
	 * @param \System\Span_1 $values [generic: TValue]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @return \System\Void|void
	 */
	public function Sort($keys, $values, $comparer);
}