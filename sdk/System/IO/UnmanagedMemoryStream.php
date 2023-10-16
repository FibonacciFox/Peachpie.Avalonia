<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnmanagedMemoryStreamMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Initialize_1($buffer, $offset, $length, $access){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Initialize_2($pointer, $length, $capacity, $access){}
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
class UnmanagedMemoryStream extends \System\IO\Stream implements 
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
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $Position;
	/**
	 * @var \System\Byte*
	 * @property
	 */
	public $PositionPointer;
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
	 * @uses UnmanagedMemoryStreamMethodsOverride::Initialize_1 ($buffer, $offset, $length, $access)
	 * @uses UnmanagedMemoryStreamMethodsOverride::Initialize_2 ($pointer, $length, $capacity, $access)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses UnmanagedMemoryStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNotClosed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureReadable(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureWriteable(){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Capacity(){}
	/**
	 * @return \System\Byte*
	 */
	public  function get_PositionPointer(){}
	/**
	 * @param \System\Byte* $value
	 * @return \System\Void|void
	 */
	public  function set_PositionPointer($value){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses UnmanagedMemoryStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @param \System\Span_1 $buffer
	 * @return \System\Int32|int
	 */
	protected  function ReadCore($buffer){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses UnmanagedMemoryStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $buffer
	 * @return \System\Void|void
	 */
	protected  function WriteCore($buffer){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses UnmanagedMemoryStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses UnmanagedMemoryStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses UnmanagedMemoryStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
