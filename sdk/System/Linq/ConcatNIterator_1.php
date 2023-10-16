<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcatNIterator_1MethodsOverride
{
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
class ConcatNIterator_1 extends \System\Linq\ConcatIterator_1 implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
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
	#[MethodPrivate]  function LazyToArray(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PreallocatingToArray(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PreviousN(){}
	/**
	 * @uses ConcatNIterator_1MethodsOverride::get_Current_1 ()
	 * @uses ConcatNIterator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses ConcatNIterator_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ConcatNIterator_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
}
