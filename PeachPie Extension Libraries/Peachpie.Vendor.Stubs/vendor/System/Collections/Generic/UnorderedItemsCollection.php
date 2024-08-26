<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnorderedItemsCollectionOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\PriorityQueue_2
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
final class UnorderedItemsCollection extends \System\Object implements
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection
{
	use UnorderedItemsCollectionOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\PriorityQueue_2[TElement,TPriority]
	 */
	protected $_queue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function get_SyncRoot(){}
	private function get_IsSynchronized(){}
	private function CopyTo($array, $index){}
	/**
	 * @uses UnorderedItemsCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses UnorderedItemsCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses UnorderedItemsCollectionOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\PriorityQueue_2|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
}