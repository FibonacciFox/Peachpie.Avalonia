<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BufferedStreamMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
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
	#[MethodOverride] private  function ReadFromBuffer_1($buffer, $offset, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function ReadFromBuffer_2($destination){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function ReadFromBuffer_3($buffer, $offset, $count, $error){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1($buffer, $offset, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($destination){}
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
	#[MethodOverride] private  function WriteToBuffer_1($buffer, $offset, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function WriteToBuffer_2($buffer){}
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
class BufferedStream extends \System\IO\Stream implements 
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
	 * @property
	 */
	public readonly $UnderlyingStream;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BufferSize;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNotClosed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCanSeek(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCanRead(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCanWrite(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureShadowBufferAllocated(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureBufferAllocated(){}
	/**
	 * @return \System\IO\Stream
	 */
	public  function get_UnderlyingStream(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BufferSize(){}
	/**
	 * @uses BufferedStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses BufferedStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses BufferedStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushAsyncInternal($cancellationToken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushRead(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearReadBufferBeforeWrite(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushWrite(){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FlushWriteAsync($cancellationToken){}
	/**
	 * @uses BufferedStreamMethodsOverride::ReadFromBuffer_1 ($buffer, $offset, $count)
	 * @uses BufferedStreamMethodsOverride::ReadFromBuffer_2 ($destination)
	 * @uses BufferedStreamMethodsOverride::ReadFromBuffer_3 ($buffer, $offset, $count, $error)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadFromBuffer(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses BufferedStreamMethodsOverride::Read_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @param \System\Memory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Int32|int $bytesAlreadySatisfied
	 * @param \System\Threading\Tasks\Task $semaphoreLockTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadFromUnderlyingStreamAsync($buffer, $cancellationToken, $bytesAlreadySatisfied, $semaphoreLockTask){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadByteSlow(){}
	/**
	 * @uses BufferedStreamMethodsOverride::WriteToBuffer_1 ($buffer, $offset, $count)
	 * @uses BufferedStreamMethodsOverride::WriteToBuffer_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteToBuffer(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses BufferedStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @param \System\ReadOnlyMemory_1 $buffer
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\Tasks\Task $semaphoreLockTask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteToUnderlyingStreamAsync($buffer, $cancellationToken, $semaphoreLockTask){}
	/**
	 * @param \System\Byte $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteByteSlow($value){}
	/**
	 * @uses BufferedStreamMethodsOverride::CopyTo_1 ($destination, $bufferSize)
	 * @uses BufferedStreamMethodsOverride::CopyTo_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::CopyToAsync_1 ($destination, $bufferSize, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::CopyToAsync_2 ($destination)
	 * @uses BufferedStreamMethodsOverride::CopyToAsync_3 ($destination, $bufferSize)
	 * @uses BufferedStreamMethodsOverride::CopyToAsync_4 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $destination
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyToAsyncCore($destination, $bufferSize, $cancellationToken){}
	/**
	 * @uses BufferedStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses BufferedStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses BufferedStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses BufferedStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses BufferedStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
