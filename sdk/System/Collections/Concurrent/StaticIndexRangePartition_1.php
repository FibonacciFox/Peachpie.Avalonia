<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StaticIndexRangePartition_1MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\KeyValuePair_2
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
class StaticIndexRangePartition_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_startIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_endIndex;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_offset;
	/**
	 * @var \System\Collections\Generic\KeyValuePair_2[System\Int64,TSource]
	 * @property
	 */
	public readonly $Current;
	/**
	 * @uses StaticIndexRangePartition_1MethodsOverride::get_Current_1 ()
	 * @uses StaticIndexRangePartition_1MethodsOverride::get_Current_2 ()
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
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
