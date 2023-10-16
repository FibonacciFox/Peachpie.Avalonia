<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileStreamMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ValidateHandle_1($handle, $access, $bufferSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ValidateHandle_2($handle, $access, $bufferSize, $isAsync){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_2(){}
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Flush_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Flush_2($flushToDisk){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($destination, $bufferSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($destination){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_1($destination, $bufferSize, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_2($destination){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_3($destination, $bufferSize){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function CopyToAsync_4($destination, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected  function BaseReadAsync_1($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] protected  function BaseReadAsync_2($buffer, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] protected  function BaseWriteAsync_1($buffer, $offset, $count, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] protected  function BaseWriteAsync_2($buffer, $cancellationToken){}
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
class FileStream extends \System\IO\Stream implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\SemaphoreSlim
	 * @field
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
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
	 * @var \Microsoft\Win32\SafeHandles\SafeFileHandle
	 * @property
	 */
	public readonly $SafeFileHandle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAsync;
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
	 * @uses FileStreamMethodsOverride::ValidateHandle_1 ($handle, $access, $bufferSize)
	 * @uses FileStreamMethodsOverride::ValidateHandle_2 ($handle, $access, $bufferSize, $isAsync)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ValidateHandle(mixed ...$args){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	public  function Lock($position, $length){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	public  function Unlock($position, $length){}
	/**
	 * @uses FileStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses FileStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses FileStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses FileStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses FileStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses FileStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::Flush_1 ()
	 * @uses FileStreamMethodsOverride::Flush_2 ($flushToDisk)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Flush(mixed ...$args){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateReadWriteArgs($buffer, $offset, $count){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	public  function get_SafeFileHandle(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAsync(){}
	/**
	 * @uses FileStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses FileStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::CopyTo_1 ($destination, $bufferSize)
	 * @uses FileStreamMethodsOverride::CopyTo_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::CopyToAsync_1 ($destination, $bufferSize, $cancellationToken)
	 * @uses FileStreamMethodsOverride::CopyToAsync_2 ($destination)
	 * @uses FileStreamMethodsOverride::CopyToAsync_3 ($destination, $bufferSize)
	 * @uses FileStreamMethodsOverride::CopyToAsync_4 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function BaseFlushAsync($cancellationToken){}
	/**
	 * @param \System\Span_1 $buffer
	 * @return \System\Int32|int
	 */
	protected  function BaseRead($buffer){}
	/**
	 * @uses FileStreamMethodsOverride::BaseReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamMethodsOverride::BaseReadAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BaseReadAsync(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @return \System\Void|void
	 */
	protected  function BaseWrite($buffer){}
	/**
	 * @uses FileStreamMethodsOverride::BaseWriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamMethodsOverride::BaseWriteAsync_2 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BaseWriteAsync(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function BaseCopyToAsync($destination, $bufferSize, $cancellationToken){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	protected  function BaseBeginRead($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Int32|int
	 */
	protected  function BaseEndRead($asyncResult){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	protected  function BaseBeginWrite($buffer, $offset, $count, $callback, $state){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	protected  function BaseEndWrite($asyncResult){}
	/**
	 * @uses FileStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses FileStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses FileStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses FileStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FileStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
