<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowsConsoleStreamMethodsOverride
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
class WindowsConsoleStream extends \System\IO\ConsoleStream implements 
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
	 * @uses WindowsConsoleStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses WindowsConsoleStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::Read_1 ($buffer)
	 * @uses WindowsConsoleStreamMethodsOverride::Read_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::Write_1 ($buffer)
	 * @uses WindowsConsoleStreamMethodsOverride::Write_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hFile
	 * @param \System\Span_1 $buffer
	 * @param \System\Boolean $isPipe
	 * @param \System\Int32& $bytesRead
	 * @param \System\Boolean $useFileAPIs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadFileNative($hFile, $buffer, $isPipe, $bytesRead, $useFileAPIs){}
	/**
	 * @param \System\IntPtr $hFile
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Boolean $useFileAPIs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteFileNative($hFile, $bytes, $useFileAPIs){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses WindowsConsoleStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses WindowsConsoleStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses WindowsConsoleStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses WindowsConsoleStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::FlushAsync_1 ()
	 * @uses WindowsConsoleStreamMethodsOverride::FlushAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count)
	 * @uses WindowsConsoleStreamMethodsOverride::ReadAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses WindowsConsoleStreamMethodsOverride::ReadAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses WindowsConsoleStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count)
	 * @uses WindowsConsoleStreamMethodsOverride::WriteAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @uses WindowsConsoleStreamMethodsOverride::WriteAsync_3 ($buffer, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses WindowsConsoleStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses WindowsConsoleStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses WindowsConsoleStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
