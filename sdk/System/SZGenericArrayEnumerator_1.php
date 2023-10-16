<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SZGenericArrayEnumerator_1MethodsOverride
{
	/**
	 * @return \System\T
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SZGenericArrayEnumerator_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\SZGenericArrayEnumerator_1[T]
	 * @field
	 */
	protected readonly $Empty;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @uses SZGenericArrayEnumerator_1MethodsOverride::get_Current_1 ()
	 * @uses SZGenericArrayEnumerator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
