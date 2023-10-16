<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StaticIndexRangePartitionForArray_1MethodsOverride
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
class StaticIndexRangePartitionForArray_1 extends \System\Collections\Concurrent\StaticIndexRangePartition_1 implements 
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
	 * @uses StaticIndexRangePartitionForArray_1MethodsOverride::get_Current_1 ()
	 * @uses StaticIndexRangePartitionForArray_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
}
