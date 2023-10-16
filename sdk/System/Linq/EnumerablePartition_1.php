<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumerablePartition_1MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function SkipAndCount_1($index, $en){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function SkipAndCount_2($index, $en){}
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
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
class EnumerablePartition_1 extends \System\Linq\Iterator_1 implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_state;
	/**
	 * @var \TSource
	 * @field
	 */
	protected $_current;
	/**
	 * @var \TSource
	 * @property
	 */
	public readonly $Current;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasLimit(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Limit(){}
	/**
	 * @param \System\Boolean $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public  function GetCount($onlyIfCheap){}
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
	 * @return \System\Linq\TSource
	 */
	public  function TryGetElementAt($index, $found){}
	/**
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TSource
	 */
	public  function TryGetFirst($found){}
	/**
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TSource
	 */
	public  function TryGetLast($found){}
	/**
	 * @return \System\Linq\TSource[]
	 */
	public  function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function ToList(){}
	/**
	 * @param \System\Collections\Generic\IEnumerator_1 $en
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SkipBeforeFirst($en){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerator_1 $en
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SkipBefore($index, $en){}
	/**
	 * @uses EnumerablePartition_1MethodsOverride::SkipAndCount_1 ($index, $en)
	 * @uses EnumerablePartition_1MethodsOverride::SkipAndCount_2 ($index, $en)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SkipAndCount(mixed ...$args){}
	/**
	 * @uses EnumerablePartition_1MethodsOverride::get_Current_1 ()
	 * @uses EnumerablePartition_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses EnumerablePartition_1MethodsOverride::GetEnumerator_1 ()
	 * @uses EnumerablePartition_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
}
