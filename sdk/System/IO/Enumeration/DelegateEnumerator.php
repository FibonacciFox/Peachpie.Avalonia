<?php
namespace System\IO\Enumeration;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DelegateEnumeratorMethodsOverride
{
	/**
	 * @return \System\IO\Enumeration\TResult
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
}
/**
 */
class DelegateEnumerator extends \System\IO\Enumeration\FileSystemEnumerator_1 implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \TResult
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses DelegateEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses DelegateEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses DelegateEnumeratorMethodsOverride::Dispose_1 ()
	 * @uses DelegateEnumeratorMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
