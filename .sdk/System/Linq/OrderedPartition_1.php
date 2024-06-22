<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OrderedPartition_1Override {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class OrderedPartition_1 extends \System\Object implements
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use OrderedPartition_1Override;


	/**
	 * @uses OrderedPartition_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses OrderedPartition_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
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
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetLast(&$found){}
	/**
	 * @return \TElement[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TElement]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @param \System\Linq\OrderedEnumerable_1 $source [generic: TElement]
	 * @param \System\Int32|int $minIdxInclusive
	 * @param \System\Int32|int $maxIdxInclusive
	 */
	public function __construct($source, $minIdxInclusive, $maxIdxInclusive){}
}