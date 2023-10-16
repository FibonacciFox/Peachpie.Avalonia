<?php
namespace System\IO\Strategies;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FileStreamStrategyMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Flush_1($flushToDisk){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Flush_2(){}
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
class FileStreamStrategy extends \System\IO\Stream implements 
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
	 * @return \System\Boolean
	 */
	protected  function get_IsAsync(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_Name(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeFileHandle
	 */
	protected  function get_SafeFileHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function get_Handle(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsClosed(){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected  function Lock($position, $length){}
	/**
	 * @param \System\Int64|int $position
	 * @param \System\Int64|int $length
	 * @return \System\Void|void
	 */
	protected  function Unlock($position, $length){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::Flush_1 ($flushToDisk)
	 * @uses FileStreamStrategyMethodsOverride::Flush_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Flush(mixed ...$args){}
	/**
	 * @param \System\Boolean $disposing
	 * @return \System\Void|void
	 */
	protected  function DisposeInternal($disposing){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::CopyTo_1 ($destination)
	 * @uses FileStreamStrategyMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses FileStreamStrategyMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses FileStreamStrategyMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses FileStreamStrategyMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::Dispose_1 ()
	 * @uses FileStreamStrategyMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::FlushAsync_1 ()
	 * @uses FileStreamStrategyMethodsOverride::FlushAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::ReadAsync_1 ($buffer, $offset, $count)
	 * @uses FileStreamStrategyMethodsOverride::ReadAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamStrategyMethodsOverride::ReadAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses FileStreamStrategyMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::WriteAsync_1 ($buffer, $offset, $count)
	 * @uses FileStreamStrategyMethodsOverride::WriteAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses FileStreamStrategyMethodsOverride::WriteAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses FileStreamStrategyMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses FileStreamStrategyMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses FileStreamStrategyMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses FileStreamStrategyMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FileStreamStrategyMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
