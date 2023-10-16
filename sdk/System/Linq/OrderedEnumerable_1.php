<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrderedEnumerable_1MethodsOverride
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
	 * @return \System\Int32[]
	 */
	#[MethodOverride] private  function SortedMap_1($buffer){}
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] private  function SortedMap_2($buffer, $minIdx, $maxIdx){}
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
	/**
	 * @return \System\Linq\EnumerableSorter_1
	 */
	#[MethodOverride] private  function GetEnumerableSorter_1(){}
	/**
	 * @return \System\Linq\EnumerableSorter_1
	 */
	#[MethodOverride] protected  function GetEnumerableSorter_2($next){}
	/**
	 * @return \System\Linq\CachingComparer_1
	 */
	#[MethodOverride] private  function GetComparer_1(){}
	/**
	 * @return \System\Linq\CachingComparer_1
	 */
	#[MethodOverride] protected  function GetComparer_2($childComparer){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class OrderedEnumerable_1 extends \System\Object implements 
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
	 * @uses OrderedEnumerable_1MethodsOverride::ToArray_1 ()
	 * @uses OrderedEnumerable_1MethodsOverride::ToArray_2 ($minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::ToList_1 ()
	 * @uses OrderedEnumerable_1MethodsOverride::ToList_2 ($minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToList(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::GetCount_1 ($onlyIfCheap)
	 * @uses OrderedEnumerable_1MethodsOverride::GetCount_2 ($minIdx, $maxIdx, $onlyIfCheap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCount(mixed ...$args){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1
	 */
	public  function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1
	 */
	public  function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TElement
	 */
	public  function TryGetElementAt($index, $found){}
	/**
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TElement
	 */
	public  function TryGetFirst($found){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::TryGetLast_1 ($found)
	 * @uses OrderedEnumerable_1MethodsOverride::TryGetLast_2 ($minIdx, $maxIdx, $found)
	 * @uses OrderedEnumerable_1MethodsOverride::TryGetLast_3 ($predicate, $found)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryGetLast(mixed ...$args){}
	/**
	 * @param \System\Linq\Buffer_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Last($buffer){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::SortedMap_1 ($buffer)
	 * @uses OrderedEnumerable_1MethodsOverride::SortedMap_2 ($buffer, $minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SortedMap(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::GetEnumerator_1 ()
	 * @uses OrderedEnumerable_1MethodsOverride::GetEnumerator_2 ($minIdx, $maxIdx)
	 * @uses OrderedEnumerable_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::GetEnumerableSorter_1 ()
	 * @uses OrderedEnumerable_1MethodsOverride::GetEnumerableSorter_2 ($next)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerableSorter(mixed ...$args){}
	/**
	 * @uses OrderedEnumerable_1MethodsOverride::GetComparer_1 ()
	 * @uses OrderedEnumerable_1MethodsOverride::GetComparer_2 ($childComparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetComparer(mixed ...$args){}
	/**
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IComparer_1 $comparer
	 * @param \System\Boolean $descending
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateOrderedEnumerable($keySelector, $comparer, $descending){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
