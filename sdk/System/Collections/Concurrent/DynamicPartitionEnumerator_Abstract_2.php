<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicPartitionEnumerator_Abstract_2MethodsOverride
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
class DynamicPartitionEnumerator_Abstract_2 extends \System\Object implements 
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
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
	 * @var \System\Int32
	 * @field
	 */
	protected $s_defaultMaxChunkSize;
	/**
	 * @var \System\Collections\Generic\KeyValuePair_2[System\Int64,TSource]
	 * @property
	 */
	public readonly $Current;
	/**
	 * @param \System\Int32|int $requestedChunkSize
	 * @return \System\Boolean
	 */
	protected  function GrabNextChunk($requestedChunkSize){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasNoElementsLeft(){}
	/**
	 * @uses DynamicPartitionEnumerator_Abstract_2MethodsOverride::get_Current_1 ()
	 * @uses DynamicPartitionEnumerator_Abstract_2MethodsOverride::get_Current_2 ()
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
