<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumeratorDropIndicesMethodsOverride
{
	/**
	 * @return \System\Collections\Concurrent\TSource
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
}
/**
 */
class EnumeratorDropIndices extends \System\Object implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \TSource
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @uses EnumeratorDropIndicesMethodsOverride::get_Current_1 ()
	 * @uses EnumeratorDropIndicesMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
