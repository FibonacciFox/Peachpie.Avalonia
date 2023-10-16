<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IOrderedEnumerable_1
{
	/**
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @param \System\Boolean $descending
	 */
	public function CreateOrderedEnumerable($keySelector, $comparer, $descending);
}
