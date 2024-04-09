<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Lookup_2Override {
	/**
	 * @deprecated
	 * @return \System\Linq\IGrouping_2
	 */
	#[MethodOverride]private function ToArray_1 (){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TElement]
	 * @return \TResult
	 */
	#[MethodOverride]protected function ToArray_2 ($resultSelector){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]private function ToList_1 (){}
	/**
	 * @deprecated
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TElement]
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]protected function ToList_2 ($resultSelector){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $keySelector [generic: TSource,TKey]
	 * @param \System\Func_2 $elementSelector [generic: TSource,TElement]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\Lookup_2
	 */
	#[MethodOverride]protected static function Create_1 ($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TElement]
	 * @param \System\Func_2 $keySelector [generic: TElement,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\Lookup_2
	 */
	#[MethodOverride]protected static function Create_2 ($source, $keySelector, $comparer){}
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
class Lookup_2 extends \System\Object implements
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Linq\ILookup_2
{
	use Lookup_2Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[TElement]
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses Lookup_2Override::ToArray_1 <br>private , args: ()<br>
	 * @uses Lookup_2Override::ToArray_2 <br>protected , args: ($resultSelector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\IGrouping_2|\TResult|mixed|\override
	 */
	#[MethodOverrideProtected]function ToArray (\override ...$args){}
	/**
	 * @uses Lookup_2Override::ToList_1 <br>private , args: ()<br>
	 * @uses Lookup_2Override::ToList_2 <br>protected , args: ($resultSelector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\List_1|mixed|\override
	 */
	#[MethodOverrideProtected]function ToList (\override ...$args){}
	private function GetCount($onlyIfCheap){}
	/**
	 * @uses Lookup_2Override::Create_1 <br>protected , args: ($source, $keySelector, $elementSelector, $comparer)<br>
	 * @uses Lookup_2Override::Create_2 <br>protected , args: ($source, $keySelector, $comparer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Linq\Lookup_2|mixed|\override
	 */
	#[MethodOverrideProtected]function Create (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TElement]
	 * @param \System\Func_2 $keySelector [generic: TElement,TKey]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TKey]
	 * @return \System\Linq\Lookup_2[TKey,TElement]
	 */
	protected static function CreateForJoin($source, $keySelector, $comparer){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function Contains($key){}
	/**
	 * @uses Lookup_2Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses Lookup_2Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\Func_3 $resultSelector [generic: TKey,System\Collections\Generic\IEnumerable_1[TElement]
	 * @return \System\Collections\Generic\IEnumerable_1[TResult]
	 */
	public function ApplyResultSelector($resultSelector){}
	private function InternalGetHashCode($key){}
	/**
	 * @param \TKey $key
	 * @param \System\Boolean|bool $create
	 * @return \System\Linq\Grouping_2[TKey,TElement]
	 */
	protected function GetGrouping($key, $create){}
	private function Resize(){}
}