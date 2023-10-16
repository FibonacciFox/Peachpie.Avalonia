<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemoryStreamMethodsOverride
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
class MemoryStream extends \System\IO\Stream implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Threading\SemaphoreSlim
	 * @field
	 */
	protected $_asyncActiveSemaphore;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRead;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSeek;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanWrite;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
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
	#[MethodPrivate]  function EnsureWriteable(){}
	/**
	 * @uses MemoryStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses MemoryStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacity($value){}
	/**
	 * @uses MemoryStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses MemoryStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetBuffer(){}
	/**
	 * @param \System\ArraySegment_1& $buffer
	 * @return \System\Boolean
	 */
	public  function TryGetBuffer($buffer){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function InternalGetBuffer(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function InternalGetPosition(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function InternalReadSpan($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected  function InternalEmulateRead($count){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Capacity($value){}
	/**
	 * @uses MemoryStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses MemoryStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::CopyTo_1 ($destination, $bufferSize)
	 * @uses MemoryStreamMethodsOverride::CopyTo_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::CopyToAsync_1 ($destination, $bufferSize, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::CopyToAsync_2 ($destination)
	 * @uses MemoryStreamMethodsOverride::CopyToAsync_3 ($destination, $bufferSize)
	 * @uses MemoryStreamMethodsOverride::CopyToAsync_4 ($destination, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @return \System\Byte[]
	 */
	public  function ToArray(){}
	/**
	 * @uses MemoryStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses MemoryStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public  function WriteTo($stream){}
	/**
	 * @uses MemoryStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses MemoryStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses MemoryStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses MemoryStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses MemoryStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
