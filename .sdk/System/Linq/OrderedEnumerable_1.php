<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OrderedEnumerable_1Override {
	/**
	 * @deprecated
	 * @return \TElement
	 */
	#[MethodOverride]public function ToArray_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \TElement
	 */
	#[MethodOverride]protected function ToArray_2 ($minIdx, $maxIdx){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]public function ToList_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]protected function ToList_2 ($minIdx, $maxIdx){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetCount_1 ($onlyIfCheap){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCount_2 ($minIdx, $maxIdx, $onlyIfCheap){}
	/**
	 * @deprecated
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	#[MethodOverride]public function TryGetLast_1 (&$found){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	#[MethodOverride]public function TryGetLast_2 ($minIdx, $maxIdx, &$found){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $predicate [generic: TElement,System\Boolean]
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	#[MethodOverride]public function TryGetLast_3 ($predicate, &$found){}
	/**
	 * @deprecated
	 * @param \System\Linq\Buffer_1 $buffer [generic: TElement]
	 * @return \System\Int32
	 */
	#[MethodOverride]private function SortedMap_1 ($buffer){}
	/**
	 * @deprecated
	 * @param \System\Linq\Buffer_1 $buffer [generic: TElement]
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Int32
	 */
	#[MethodOverride]private function SortedMap_2 ($buffer, $minIdx, $maxIdx){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]protected function GetEnumerator_2 ($minIdx, $maxIdx){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @return \System\Linq\EnumerableSorter_1
	 */
	#[MethodOverride]private function GetEnumerableSorter_1 (){}
	/**
	 * @deprecated
	 * @param \System\Linq\EnumerableSorter_1 $next [generic: TElement]
	 * @return \System\Linq\EnumerableSorter_1
	 */
	#[MethodOverride]protected function GetEnumerableSorter_2 ($next){}
	/**
	 * @deprecated
	 * @return \System\Linq\CachingComparer_1
	 */
	#[MethodOverride]private function GetComparer_1 (){}
	/**
	 * @deprecated
	 * @param \System\Linq\CachingComparer_1 $childComparer [generic: TElement]
	 * @return \System\Linq\CachingComparer_1
	 */
	#[MethodOverride]protected function GetComparer_2 ($childComparer){}
}
class OrderedEnumerable_1 extends \System\Object implements
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Linq\IOrderedEnumerable_1
{
	use OrderedEnumerable_1Override;

	/**
	 * @field
	 * @var \System\Collections\Generic\IEnumerable_1[TElement]
	 */
	protected $_source;
	/**
	 * @uses OrderedEnumerable_1Override::ToArray_1 <br>public , args: ()<br>
	 * @uses OrderedEnumerable_1Override::ToArray_2 <br>protected , args: ($minIdx, $maxIdx)<br>
	 * @var mixed|\override ...$args
	 * @return \TElement|mixed|\override
	 */
	#[MethodOverridePublic]function ToArray (\override ...$args){}
	/**
	 * @uses OrderedEnumerable_1Override::ToList_1 <br>public , args: ()<br>
	 * @uses OrderedEnumerable_1Override::ToList_2 <br>protected , args: ($minIdx, $maxIdx)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\List_1|mixed|\override
	 */
	#[MethodOverridePublic]function ToList (\override ...$args){}
	/**
	 * @uses OrderedEnumerable_1Override::GetCount_1 <br>public , args: ($onlyIfCheap)<br>
	 * @uses OrderedEnumerable_1Override::GetCount_2 <br>protected , args: ($minIdx, $maxIdx, $onlyIfCheap)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetCount (\override ...$args){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @uses OrderedEnumerable_1Override::TryGetLast_1 <br>public , args: (&$found)<br>
	 * @uses OrderedEnumerable_1Override::TryGetLast_2 <br>public , args: ($minIdx, $maxIdx, &$found)<br>
	 * @uses OrderedEnumerable_1Override::TryGetLast_3 <br>public , args: ($predicate, &$found)<br>
	 * @var mixed|\override ...$args
	 * @return \TElement|mixed|\override
	 */
	#[MethodOverridePublic]function TryGetLast (\override ...$args){}
	private function Last($buffer){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses OrderedEnumerable_1Override::SortedMap_1 <br>private , args: ($buffer)<br>
	 * @uses OrderedEnumerable_1Override::SortedMap_2 <br>private , args: ($buffer, $minIdx, $maxIdx)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|mixed|\override
	 */
	#[MethodOverridePrivate]function SortedMap (\override ...$args){}
	/**
	 * @uses OrderedEnumerable_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses OrderedEnumerable_1Override::GetEnumerator_2 <br>protected , args: ($minIdx, $maxIdx)<br>
	 * @uses OrderedEnumerable_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (\override ...$args){}
	/**
	 * @uses OrderedEnumerable_1Override::GetEnumerableSorter_1 <br>private , args: ()<br>
	 * @uses OrderedEnumerable_1Override::GetEnumerableSorter_2 <br>protected , args: ($next)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\EnumerableSorter_1|mixed|\override
	 */
	#[MethodOverrideProtected]function GetEnumerableSorter (\override ...$args){}
	/**
	 * @uses OrderedEnumerable_1Override::GetComparer_1 <br>private , args: ()<br>
	 * @uses OrderedEnumerable_1Override::GetComparer_2 <br>protected , args: ($childComparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\CachingComparer_1|mixed|\override
	 */
	#[MethodOverrideProtected]function GetComparer (\override ...$args){}
	private function CreateOrderedEnumerable($keySelector, $comparer, $descending){}
}