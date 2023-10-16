<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PipeStreamMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1($buffer, $offset, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($buffer){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_1($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_3($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($buffer){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WriteAsync_1($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function WriteAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WriteAsync_3($buffer, $offset, $count){}
	/**
	 * @return \\SECURITY_ATTRIBUTES
	 */
	#[MethodOverride] protected static function GetSecAttrs_1($inheritability){}
	/**
	 * @return \\SECURITY_ATTRIBUTES
	 */
	#[MethodOverride] protected static function GetSecAttrs_2($inheritability, $pipeSecurity, $pinningHandle){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($destination){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($destination, $bufferSize){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_1($destination){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_2($destination, $bufferSize){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_3($destination, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_4($destination, $bufferSize, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function ReadExactlyAsync_1($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function ReadExactlyAsync_2($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReadExactly_1($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReadExactly_2($buffer, $offset, $count){}
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class PipeStream extends \System\IO\Stream implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\ThreadPoolBoundHandle
	 * @field
	 */
	protected $_threadPoolBinding;
	/**
	 * @var \System\Threading\SemaphoreSlim
	 * @field
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsConnected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAsync;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMessageComplete;
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafePipeHandle
	 * @property
	 */
	public readonly $SafePipeHandle;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRead;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanWrite;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSeek;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $Position;
	/**
	 * @var \System\IO\Pipes\PipeTransmissionMode
	 * @property
	 */
	public readonly $TransmissionMode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InBufferSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OutBufferSize;
	/**
	 * @var \System\IO\Pipes\PipeTransmissionMode
	 * @property
	 */
	public $ReadMode;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanTimeout;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ReadTimeout;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $WriteTimeout;
	/**
	 * @param \System\IO\Pipes\PipeDirection $direction
	 * @param \System\IO\Pipes\PipeTransmissionMode $transmissionMode
	 * @param \System\UInt32 $outBufferSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Init($direction, $transmissionMode, $outBufferSize){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafePipeHandle $handle
	 * @param \System\Boolean $isExposed
	 * @param \System\Boolean $isAsync
	 * @return \System\Void|void
	 */
	protected  function InitializeHandle($handle, $isExposed, $isAsync){}
	/**
	 * @uses PipeStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses PipeStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses PipeStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsConnected(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsConnected($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAsync(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMessageComplete(){}
	/**
	 * @param \System\Boolean $completion
	 * @return \System\Void|void
	 */
	protected  function UpdateMessageCompletion($completion){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafePipeHandle
	 */
	public  function get_SafePipeHandle(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafePipeHandle
	 */
	protected  function get_InternalHandle(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsHandleExposed(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CheckPipePropertyOperations(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CheckReadOperations(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CheckWriteOperations(){}
	/**
	 * @return \System\IO\Pipes\PipeState
	 */
	protected  function get_State(){}
	/**
	 * @param \System\IO\Pipes\PipeState $value
	 * @return \System\Void|void
	 */
	protected  function set_State($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCurrentUserOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsCurrentUserOnly($value){}
	/**
	 * @uses PipeStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses PipeStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AsyncOverSyncRead($buffer, $cancellationToken){}
	/**
	 * @uses PipeStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses PipeStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AsyncOverSyncWrite($buffer, $cancellationToken){}
	/**
	 * @param \System\String|string $serverName
	 * @param \System\String|string $pipeName
	 * @return \System\String|string
	 */
	protected static function GetPipePath($serverName, $pipeName){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafePipeHandle $safePipeHandle
	 * @return \System\Void|void
	 */
	protected static function ValidateHandleIsPipe($safePipeHandle){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafePipeHandle $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeAsyncHandle($handle){}
	/**
	 * @param \System\IO\Pipes\PipeValueTaskSource $source
	 * @return \System\Void|void
	 */
	protected  function TryToReuse($source){}
	/**
	 * @param \System\Boolean $disposing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DisposeCore($disposing){}
	/**
	 * @param \System\Span_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadCore($buffer){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadAsyncCore($buffer, $cancellationToken){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteCore($buffer){}
	/**
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteAsyncCore($buffer, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public  function WaitForPipeDrain(){}
	/**
	 * @return \System\IO\Pipes\PipeTransmissionMode
	 */
	public  function get_TransmissionMode(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InBufferSize(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OutBufferSize(){}
	/**
	 * @return \System\IO\Pipes\PipeTransmissionMode
	 */
	public  function get_ReadMode(){}
	/**
	 * @param \System\IO\Pipes\PipeTransmissionMode $value
	 * @return \System\Void|void
	 */
	public  function set_ReadMode($value){}
	/**
	 * @uses PipeStreamMethodsOverride::GetSecAttrs_1 ($inheritability)
	 * @uses PipeStreamMethodsOverride::GetSecAttrs_2 ($inheritability, $pipeSecurity, $pinningHandle)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetSecAttrs(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateReadMode(){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @return \System\Exception
	 */
	protected  function WinIOError($errorCode){}
	/**
	 * @uses PipeStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses PipeStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses PipeStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses PipeStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses PipeStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses PipeStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses PipeStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses PipeStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
