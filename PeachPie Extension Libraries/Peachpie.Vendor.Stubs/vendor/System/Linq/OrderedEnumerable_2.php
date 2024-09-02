<?php
namespace System\Linq;
final class OrderedEnumerable_2 extends \System\Linq\OrderedEnumerable_1 implements
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Linq\IOrderedEnumerable_1
{
	/**
	 * @field
	 * @var \System\Collections\Generic\IEnumerable_1[TElement]
	 */
	protected $_source;
	private function CreateOrderedEnumerable($keySelector, $comparer, $descending){}
}