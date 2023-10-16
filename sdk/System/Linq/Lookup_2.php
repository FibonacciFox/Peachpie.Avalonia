<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Lookup_2MethodsOverride
{
	/**
	 * @return \System\Linq\IGrouping_2[]
	 */
	#[MethodOverride] private  function ToArray_1(){}
	/**
	 * @return \System\Linq\TResult[]
	 */
	#[MethodOverride] protected  function ToArray_2($resultSelector){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] private  function ToList_1(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] protected  function ToList_2($resultSelector){}
	/**
	 * @return \System\Linq\Lookup_2
	 */
	#[MethodOverride] protected static function Create_1($source, $keySelector, $elementSelector, $comparer){}
	/**
	 * @return \System\Linq\Lookup_2
	 */
	#[MethodOverride] protected static function Create_2($source, $keySelector, $comparer){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Lookup_2 extends \System\Object implements 
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Linq\ILookup_2
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[TElement]
	 * @property
	 */
	public readonly $Item;
	/**
	 * @uses Lookup_2MethodsOverride::ToArray_1 ()
	 * @uses Lookup_2MethodsOverride::ToArray_2 ($resultSelector)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToArray(mixed ...$args){}
	/**
	 * @uses Lookup_2MethodsOverride::ToList_1 ()
	 * @uses Lookup_2MethodsOverride::ToList_2 ($resultSelector)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToList(mixed ...$args){}
	/**
	 * @param \System\Boolean $onlyIfCheap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCount($onlyIfCheap){}
	/**
	 * @uses Lookup_2MethodsOverride::Create_1 ($source, $keySelector, $elementSelector, $comparer)
	 * @uses Lookup_2MethodsOverride::Create_2 ($source, $keySelector, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Func_2 $keySelector
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer
	 * @return \System\Linq\Lookup_2
	 */
	protected static function CreateForJoin($source, $keySelector, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Linq\TKey $key
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\Linq\TKey $key
	 * @return \System\Boolean
	 */
	public  function Contains($key){}
	/**
	 * @uses Lookup_2MethodsOverride::GetEnumerator_1 ()
	 * @uses Lookup_2MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Func_3 $resultSelector
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function ApplyResultSelector($resultSelector){}
	/**
	 * @param \System\Linq\TKey $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetHashCode($key){}
	/**
	 * @param \System\Linq\TKey $key
	 * @param \System\Boolean $create
	 * @return \System\Linq\Grouping_2
	 */
	protected  function GetGrouping($key, $create){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Resize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
