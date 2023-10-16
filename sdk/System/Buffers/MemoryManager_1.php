<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemoryManager_1MethodsOverride
{
	/**
	 * @return \System\Memory_1
	 */
	#[MethodOverride] protected  function CreateMemory_1($length){}
	/**
	 * @return \System\Memory_1
	 */
	#[MethodOverride] protected  function CreateMemory_2($start, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class MemoryManager_1 extends \System\Object implements 
	\System\Buffers\IMemoryOwner_1,
	\System\IDisposable,
	\System\Buffers\IPinnable
{
	/**
	 * @var \System\Memory_1[T]
	 * @property
	 */
	public readonly $Memory;
	/**
	 * @return \System\Memory_1
	 */
	public  function get_Memory(){}
	/**
	 * @return \System\Span_1
	 */
	public  function GetSpan(){}
	/**
	 * @param \System\Int32|int $elementIndex
	 * @return \System\Buffers\MemoryHandle
	 */
	public  function Pin($elementIndex){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unpin(){}
	/**
	 * @uses MemoryManager_1MethodsOverride::CreateMemory_1 ($length)
	 * @uses MemoryManager_1MethodsOverride::CreateMemory_2 ($start, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateMemory(mixed ...$args){}
	/**
	 * @param \System\ArraySegment_1& $segment
	 * @return \System\Boolean
	 */
	protected  function TryGetArray($segment){}
	/**
	 * @uses MemoryManager_1MethodsOverride::Dispose_1 ()
	 * @uses MemoryManager_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
