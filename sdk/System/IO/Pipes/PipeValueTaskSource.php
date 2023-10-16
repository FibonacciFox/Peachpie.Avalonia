<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeValueTaskSourceMethodsOverride
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
class PipeValueTaskSource extends \System\Object implements 
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
	 * @var \System\Threading\IOCompletionCallback
	 * @field
	 */
	protected readonly $s_ioCallback;
	/**
	 * @return \System\Void|void
	 */
	protected  function Dispose(){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory
	 * @return \System\Void|void
	 */
	protected  function PrepareForOperation($memory){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public  function GetStatus($token){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @uses PipeValueTaskSourceMethodsOverride::GetResult_1 ($token)
	 * @uses PipeValueTaskSourceMethodsOverride::GetResult_2 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetResult(mixed ...$args){}
	/**
	 * @return \System\Int16
	 */
	protected  function get_Version(){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	protected  function RegisterForCancellation($cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReleaseResources(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function FinishedScheduling(){}
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @param \System\Threading\NativeOverlapped* $pOverlapped
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IOCallback($errorCode, $numBytes, $pOverlapped){}
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Complete($errorCode, $numBytes){}
	/**
	 * @param \System\UInt32 $errorCode
	 * @param \System\UInt32 $numBytes
	 * @return \System\Void|void
	 */
	protected  function CompleteCore($errorCode, $numBytes){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
