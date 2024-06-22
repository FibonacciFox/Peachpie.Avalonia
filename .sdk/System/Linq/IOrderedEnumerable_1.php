<?php
namespace System\Linq;
interface IOrderedEnumerable_1
{


	/**
	 * @param \System\Func_2 $keySelector [generic: TElement,TKey]
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: TKey]
	 * @param \System\Boolean|bool $descending
	 * @return \System\Linq\IOrderedEnumerable_1[TElement]
	 */
	public function CreateOrderedEnumerable($keySelector, $comparer, $descending);
}