<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConsoleStreamMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($buffer, $offset, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($buffer){}
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
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
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
class ConsoleStream extends \System\IO\Stream implements 
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
	 * @uses ConsoleStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses ConsoleStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses ConsoleStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses ConsoleStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected  function ValidateRead($buffer, $offset, $count){}
	/**
	 * @param \System\Byte[] $buffer
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected  function ValidateWrite($buffer, $offset, $count){}
	/**
	 * @uses ConsoleStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses ConsoleStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses ConsoleStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses ConsoleStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses ConsoleStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::FlushAsync_1 ()
	 * @uses ConsoleStreamMethodsOverride::FlushAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count)
	 * @uses ConsoleStreamMethodsOverride::ReadAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses ConsoleStreamMethodsOverride::ReadAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses ConsoleStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count)
	 * @uses ConsoleStreamMethodsOverride::WriteAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses ConsoleStreamMethodsOverride::WriteAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses ConsoleStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses ConsoleStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses ConsoleStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
