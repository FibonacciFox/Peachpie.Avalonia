<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AnonymousPipeServerStreamMethodsOverride
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Create_1($direction, $inheritability, $bufferSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Create_2($direction, $inheritability, $bufferSize, $pipeSecurity){}
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
class AnonymousPipeServerStream extends \System\IO\Pipes\PipeStream implements 
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
	 * @var \Microsoft\Win32\SafeHandles\SafePipeHandle
	 * @property
	 */
	public readonly $ClientSafePipeHandle;
	/**
	 * @var \System\IO\Pipes\PipeTransmissionMode
	 * @property
	 */
	public readonly $TransmissionMode;
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
	 * @return \System\String|string
	 */
	public  function GetClientHandleAsString(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafePipeHandle
	 */
	public  function get_ClientSafePipeHandle(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DisposeLocalCopyOfClientHandle(){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses AnonymousPipeServerStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::Create_1 ($direction, $inheritability, $bufferSize)
	 * @uses AnonymousPipeServerStreamMethodsOverride::Create_2 ($direction, $inheritability, $bufferSize, $pipeSecurity)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Create(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses AnonymousPipeServerStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses AnonymousPipeServerStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses AnonymousPipeServerStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses AnonymousPipeServerStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses AnonymousPipeServerStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
