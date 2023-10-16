<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Iterator_1MethodsOverride
{
	/**
	 * @return \System\IO\TSource
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
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
class Iterator_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $state;
	/**
	 * @var \TSource
	 * @field
	 */
	protected $current;
	/**
	 * @var \TSource
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses Iterator_1MethodsOverride::get_Current_1 ()
	 * @uses Iterator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\IO\Iterator_1
	 */
	protected  function Clone(){}
	/**
	 * @uses Iterator_1MethodsOverride::Dispose_1 ()
	 * @uses Iterator_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses Iterator_1MethodsOverride::GetEnumerator_1 ()
	 * @uses Iterator_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
