<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StreamMethodsOverride
{
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_1($buffer, $offset, $count){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ReadAsync_2($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public  function ReadAsync_3($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function ReadExactlyAsync_1($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function ReadExactlyAsync_2($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WriteAsync_1($buffer, $offset, $count){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WriteAsync_2($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public  function WriteAsync_3($buffer, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1($buffer, $offset, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReadExactly_1($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ReadExactly_2($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($buffer){}
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
class Stream extends \System\MarshalByRefObject implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\SemaphoreSlim
	 * @field
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @var \System\IO\Stream
	 * @field
	 */
	public readonly $Null;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanTimeout;
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
	 * @return \System\Threading\SemaphoreSlim
	 */
	protected  function EnsureAsyncActiveSemaphoreInitialized(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanRead(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanWrite(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanSeek(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanTimeout(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Position(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ReadTimeout(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ReadTimeout($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WriteTimeout(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_WriteTimeout($value){}
	/**
	 * @uses StreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses StreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses StreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses StreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses StreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses StreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCopyBufferSize(){}
	/**
	 * @uses StreamMethodsOverride::Dispose_1 ()
	 * @uses StreamMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Flush(){}
	/**
	 * @uses StreamMethodsOverride::FlushAsync_1 ()
	 * @uses StreamMethodsOverride::FlushAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	protected  function CreateWaitHandle(){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public  function BeginRead($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Boolean $serializeAsynchronously
	 * @param \System\Boolean $apm
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected  function BeginReadInternal($buffer, $offset, $count, $callback, $state, $serializeAsynchronously, $apm){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Int32|int
	 */
	public  function EndRead($asyncResult){}
	/**
	 * @uses StreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count)
	 * @uses StreamMethodsOverride::ReadAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses StreamMethodsOverride::ReadAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses StreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses StreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean $throwOnEndOfStream
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function ReadAtLeastAsync($buffer, $minimumBytes, $throwOnEndOfStream, $cancellationToken){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean $throwOnEndOfStream
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadAtLeastAsyncCore($buffer, $minimumBytes, $throwOnEndOfStream, $cancellationToken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HasOverriddenBeginEndRead(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HasOverriddenBeginEndWrite(){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BeginEndReadAsync($buffer, $offset, $count){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public  function BeginWrite($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Boolean $serializeAsynchronously
	 * @param \System\Boolean $apm
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function BeginWriteInternal($buffer, $offset, $count, $callback, $state, $serializeAsynchronously, $apm){}
	/**
	 * @param \System\Threading\Tasks\Task $asyncWaiter
	 * @param \System\IO\ReadWriteTask $readWriteTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunReadWriteTaskWhenReady($asyncWaiter, $readWriteTask){}
	/**
	 * @param \System\IO\ReadWriteTask $readWriteTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunReadWriteTask($readWriteTask){}
	/**
	 * @param \System\IO\ReadWriteTask $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FinishTrackingAsyncOperation($task){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	public  function EndWrite($asyncResult){}
	/**
	 * @uses StreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count)
	 * @uses StreamMethodsOverride::WriteAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses StreamMethodsOverride::WriteAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\Task $writeTask
	 * @param \System\Byte[] $localBuffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FinishWriteAsync($writeTask, $localBuffer){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BeginEndWriteAsync($buffer, $offset, $count){}
	/**
	 * @param \System\Int64|int $offset
	 * @param \System\IO\SeekOrigin $origin
	 * @return \System\Int64|int
	 */
	public  function Seek($offset, $origin){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	public  function SetLength($value){}
	/**
	 * @uses StreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses StreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function ReadByte(){}
	/**
	 * @uses StreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses StreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean $throwOnEndOfStream
	 * @return \System\Int32|int
	 */
	public  function ReadAtLeast($buffer, $minimumBytes, $throwOnEndOfStream){}
	/**
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $minimumBytes
	 * @param \System\Boolean $throwOnEndOfStream
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadAtLeastCore($buffer, $minimumBytes, $throwOnEndOfStream){}
	/**
	 * @uses StreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses StreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public  function WriteByte($value){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\IO\Stream
	 */
	public static function Synchronized($stream){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ObjectInvariant(){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function ValidateBufferArguments($buffer, $offset, $count){}
	/**
	 * @param \System\Int32|int $bufferLength
	 * @param \System\Int32|int $minimumBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateReadAtLeastArguments($bufferLength, $minimumBytes){}
	/**
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Void|void
	 */
	protected static function ValidateCopyToArguments($destination, $bufferSize){}
	/**
	 * @uses StreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses StreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
