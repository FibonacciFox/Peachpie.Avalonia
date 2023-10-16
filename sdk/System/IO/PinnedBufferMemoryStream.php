<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PinnedBufferMemoryStreamMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_1($buffer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Read_2($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($buffer, $offset, $count){}
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
	#[MethodOverride] protected  function Initialize_1($buffer, $offset, $length, $access){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Initialize_2($pointer, $length, $capacity, $access){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function FlushAsync_2(){}
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
class PinnedBufferMemoryStream extends \System\IO\UnmanagedMemoryStream implements 
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
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Read_1 ($buffer)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Read_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Write_1 ($buffer)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Write_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Initialize_1 ($buffer, $offset, $length, $access)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::Initialize_2 ($pointer, $length, $capacity, $access)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses PinnedBufferMemoryStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses PinnedBufferMemoryStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
