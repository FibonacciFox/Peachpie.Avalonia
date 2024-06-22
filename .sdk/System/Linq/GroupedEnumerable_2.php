<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GroupedEnumerable_2Override {
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
final class GroupedEnumerable_2 extends \System\Object implements
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use GroupedEnumerable_2Override;


	/**
	 * @return \System\Linq\IGrouping_2[TKey,TSource][]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[System\Linq\IGrouping_2[TKey,TSource]]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @uses GroupedEnumerable_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses GroupedEnumerable_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 */
	public function __construct($source, $keySelector, $comparer){}
}