<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NamedPipeClientStreamMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Connect_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Connect_2($timeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Connect_3($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ConnectAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ConnectAsync_2($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ConnectAsync_3($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ConnectAsync_4($timeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ConnectAsync_5($timeout, $cancellationToken){}
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
class NamedPipeClientStream extends \System\IO\Pipes\PipeStream implements 
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $NumberOfServerInstances;
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
	 * @uses NamedPipeClientStreamMethodsOverride::Connect_1 ()
	 * @uses NamedPipeClientStreamMethodsOverride::Connect_2 ($timeout)
	 * @uses NamedPipeClientStreamMethodsOverride::Connect_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Connect(mixed ...$args){}
	/**
	 * @param \System\Int32|int $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Int32|int $startTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConnectInternal($timeout, $cancellationToken, $startTime){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::ConnectAsync_1 ()
	 * @uses NamedPipeClientStreamMethodsOverride::ConnectAsync_2 ($timeout)
	 * @uses NamedPipeClientStreamMethodsOverride::ConnectAsync_3 ($cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::ConnectAsync_4 ($timeout, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::ConnectAsync_5 ($timeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConnectAsync(mixed ...$args){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToTimeoutMilliseconds($timeout){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckConnectOperationsClient(){}
	/**
	 * @param \System\Int32|int $timeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryConnect($timeout, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NumberOfServerInstances(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateRemotePipeUser(){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses NamedPipeClientStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses NamedPipeClientStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses NamedPipeClientStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses NamedPipeClientStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses NamedPipeClientStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses NamedPipeClientStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses NamedPipeClientStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses NamedPipeClientStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses NamedPipeClientStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses NamedPipeClientStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
