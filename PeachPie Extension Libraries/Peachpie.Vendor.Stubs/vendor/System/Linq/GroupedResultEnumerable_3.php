<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GroupedResultEnumerable_3Override {
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
final class GroupedResultEnumerable_3 extends \System\Object implements
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use GroupedResultEnumerable_3Override;

	/**
	 * @return \TResult[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TResult]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @uses GroupedResultEnumerable_3Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses GroupedResultEnumerable_3Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 */
	public function __construct($source, $keySelector, $resultSelector, $comparer){}
}