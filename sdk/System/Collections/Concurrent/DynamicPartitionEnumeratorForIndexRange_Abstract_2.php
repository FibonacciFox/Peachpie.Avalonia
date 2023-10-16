<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicPartitionEnumeratorForIndexRange_Abstract_2MethodsOverride
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
class DynamicPartitionEnumeratorForIndexRange_Abstract_2 extends \System\Collections\Concurrent\DynamicPartitionEnumerator_Abstract_2 implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_startIndex;
	/**
	 * @var \TSourceReader
	 * @field
	 */
	protected readonly $_sharedReader;
	/**
	 * @var \System\Runtime\CompilerServices\StrongBox_1[System\Int32]
	 * @field
	 */
	protected $_currentChunkSize;
	/**
	 * @var \System\Runtime\CompilerServices\StrongBox_1[System\Int32]
	 * @field
	 */
	protected $_localOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_maxChunkSize;
	/**
	 * @var \System\Collections\Concurrent\Partitioner+SharedLong
	 * @field
	 */
	protected readonly $_sharedIndex;
	/**
	 * @var \System\Collections\Generic\KeyValuePair_2[System\Int64,TSource]
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_SourceCount(){}
	/**
	 * @uses DynamicPartitionEnumeratorForIndexRange_Abstract_2MethodsOverride::get_Current_1 ()
	 * @uses DynamicPartitionEnumeratorForIndexRange_Abstract_2MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
}
