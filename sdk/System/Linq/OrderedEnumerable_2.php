<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrderedEnumerable_2MethodsOverride
{
	/**
	 * @return \System\Linq\TElement[]
	 */
	#[MethodOverride] public  function ToArray_1(){}
	/**
	 * @return \System\Linq\TElement[]
	 */
	#[MethodOverride] protected  function ToArray_2($minIdx, $maxIdx){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] public  function ToList_1(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] protected  function ToList_2($minIdx, $maxIdx){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCount_1($onlyIfCheap){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCount_2($minIdx, $maxIdx, $onlyIfCheap){}
	/**
	 * @return \System\Linq\TElement
	 */
	#[MethodOverride] public  function TryGetLast_1($found){}
	/**
	 * @return \System\Linq\TElement
	 */
	#[MethodOverride] public  function TryGetLast_2($minIdx, $maxIdx, $found){}
	/**
	 * @return \System\Linq\TElement
	 */
	#[MethodOverride] public  function TryGetLast_3($predicate, $found){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] protected  function GetEnumerator_2($minIdx, $maxIdx){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class OrderedEnumerable_2 extends \System\Linq\OrderedEnumerable_1 implements 
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Linq\IOrderedEnumerable_1
{
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[TElement]
	 * @field
	 */
	protected $_source;
	/**
	 * @param \System\Linq\EnumerableSorter_1 $next
	 * @return \System\Linq\EnumerableSorter_1
	 */
	protected  function GetEnumerableSorter($next){}
	/**
	 * @param \System\Linq\CachingComparer_1 $childComparer
	 * @return \System\Linq\CachingComparer_1
	 */
	protected  function GetComparer($childComparer){}
	/**
	 * @uses OrderedEnumerable_2MethodsOverride::ToArray_1 ()
	 * @uses OrderedEnumerable_2MethodsOverride::ToArray_2 ($minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_2MethodsOverride::ToList_1 ()
	 * @uses OrderedEnumerable_2MethodsOverride::ToList_2 ($minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToList(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_2MethodsOverride::GetCount_1 ($onlyIfCheap)
	 * @uses OrderedEnumerable_2MethodsOverride::GetCount_2 ($minIdx, $maxIdx, $onlyIfCheap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCount(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_2MethodsOverride::TryGetLast_1 ($found)
	 * @uses OrderedEnumerable_2MethodsOverride::TryGetLast_2 ($minIdx, $maxIdx, $found)
	 * @uses OrderedEnumerable_2MethodsOverride::TryGetLast_3 ($predicate, $found)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryGetLast(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_2MethodsOverride::GetEnumerator_1 ()
	 * @uses OrderedEnumerable_2MethodsOverride::GetEnumerator_2 ($minIdx, $maxIdx)
	 * @uses OrderedEnumerable_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @param \System\Boolean $descending
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateOrderedEnumerable($keySelector, $comparer, $descending){}
}
