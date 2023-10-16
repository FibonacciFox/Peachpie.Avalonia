<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConnectionValueTaskSourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetResult_1($token){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetResult_2($token){}
}
/**
 */
class ConnectionValueTaskSource extends \System\IO\Pipes\PipeValueTaskSource implements 
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource
{
	/**
	 * @var \System\Threading\PreAllocatedOverlapped
	 * @field
	 */
	protected readonly $_preallocatedOverlapped;
	/**
	 * @var \System\IO\Pipes\PipeStream
	 * @field
	 */
	protected readonly $_pipeStream;
	/**
	 * @var \System\Buffers\MemoryHandle
	 * @field
	 */
	protected $_memoryHandle;
	/**
	 * @var \System\Threading\Tasks\Sources\ManualResetValueTaskSourceCore_1[System\Int32]
	 * @field
	 */
	protected $_source;
	/**
	 * @var \System\Threading\NativeOverlapped*
	 * @field
	 */
	protected $_overlapped;
	/**
	 * @var \System\Threading\CancellationTokenRegistration
	 * @field
	 */
	protected $_cancellationRegistration;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	protected $_result;
	/**
	 * @uses ConnectionValueTaskSourceMethodsOverride::GetResult_1 ($token)
	 * @uses ConnectionValueTaskSourceMethodsOverride::GetResult_2 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetResult(mixed ...$args){}
}
