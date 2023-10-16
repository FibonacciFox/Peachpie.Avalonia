<?php
namespace System\IO\Pipelines;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BufferSegmentMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOwnedMemory_1($memoryOwner){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetOwnedMemory_2($arrayPoolBuffer){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] protected static function GetLength_1($startSegment, $startIndex, $endSegment, $endIndex){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] protected static function GetLength_2($startPosition, $endSegment, $endIndex){}
}
/**
 */
class BufferSegment extends \System\Buffers\ReadOnlySequenceSegment_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $End;
	/**
	 * @var \System\IO\Pipelines\BufferSegment
	 * @property
	 */
	public $NextSegment;
	/**
	 * @var \System\Memory_1[System\Byte]
	 * @property
	 */
	public $AvailableMemory;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WritableBytes;
	/**
	 * @var \System\ReadOnlyMemory_1[System\Byte]
	 * @property
	 */
	public $Memory;
	/**
	 * @var \System\Buffers\ReadOnlySequenceSegment_1[System\Byte]
	 * @property
	 */
	public $Next;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $RunningIndex;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_End(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_End($value){}
	/**
	 * @return \System\IO\Pipelines\BufferSegment
	 */
	public  function get_NextSegment(){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment $value
	 * @return \System\Void|void
	 */
	public  function set_NextSegment($value){}
	/**
	 * @uses BufferSegmentMethodsOverride::SetOwnedMemory_1 ($memoryOwner)
	 * @uses BufferSegmentMethodsOverride::SetOwnedMemory_2 ($arrayPoolBuffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetOwnedMemory(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetMemory(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_MemoryOwner(){}
	/**
	 * @return \System\Memory_1
	 */
	public  function get_AvailableMemory(){}
	/**
	 * @param \System\Memory_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_AvailableMemory($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WritableBytes(){}
	/**
	 * @param \System\IO\Pipelines\BufferSegment $segment
	 * @return \System\Void|void
	 */
	public  function SetNext($segment){}
	/**
	 * @uses BufferSegmentMethodsOverride::GetLength_1 ($startSegment, $startIndex, $endSegment, $endIndex)
	 * @uses BufferSegmentMethodsOverride::GetLength_2 ($startPosition, $endSegment, $endIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetLength(mixed ...$args){}
}
