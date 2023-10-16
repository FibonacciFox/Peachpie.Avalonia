<?php
namespace System\IO\Pipes;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NamedPipeServerStreamMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitForConnectionAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitForConnectionAsync_2($cancellationToken){}
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
	#[MethodOverride] private  function Create_1($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $inheritability){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Create_2($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $pipeSecurity, $inheritability, $additionalAccessRights){}
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
class NamedPipeServerStream extends \System\IO\Pipes\PipeStream implements 
	\System\IDisposable,
	\System\IAsyncDisposable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MaxAllowedServerInstances;
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
	 * @param \System\String|string $pipeName
	 * @param \System\IO\Pipes\PipeDirection $direction
	 * @param \System\Int32|int $maxNumberOfServerInstances
	 * @param \System\IO\Pipes\PipeTransmissionMode $transmissionMode
	 * @param \System\IO\Pipes\PipeOptions $options
	 * @param \System\Int32|int $inBufferSize
	 * @param \System\Int32|int $outBufferSize
	 * @param \System\IO\HandleInheritability $inheritability
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateParameters($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $inheritability){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::WaitForConnectionAsync_1 ()
	 * @uses NamedPipeServerStreamMethodsOverride::WaitForConnectionAsync_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitForConnectionAsync(mixed ...$args){}
	/**
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $state
	 * @return \System\IAsyncResult
	 */
	public  function BeginWaitForConnection($callback, $state){}
	/**
	 * @param \System\IAsyncResult $asyncResult
	 * @return \System\Void|void
	 */
	public  function EndWaitForConnection($asyncResult){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckConnectOperationsServer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckDisconnectOperations(){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::Dispose_1 ($disposing)
	 * @uses NamedPipeServerStreamMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::Create_1 ($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $inheritability)
	 * @uses NamedPipeServerStreamMethodsOverride::Create_2 ($pipeName, $direction, $maxNumberOfServerInstances, $transmissionMode, $options, $inBufferSize, $outBufferSize, $pipeSecurity, $inheritability, $additionalAccessRights)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Create(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function WaitForConnection(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Disconnect(){}
	/**
	 * @return \System\String|string
	 */
	public  function GetImpersonationUserName(){}
	/**
	 * @param \System\IO\Pipes\PipeStreamImpersonationWorker $impersonationWorker
	 * @return \System\Void|void
	 */
	public  function RunAsClient($impersonationWorker){}
	/**
	 * @param \System\Object|object $helper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ImpersonateAndTryCode($helper){}
	/**
	 * @param \System\Object|object $helper
	 * @param \System\Boolean $exceptionThrown
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RevertImpersonationOnBackout($helper, $exceptionThrown){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitForConnectionCoreAsync($cancellationToken){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckConnectOperationsServerWithHandle(){}
	/**
	 * @param \System\Int32|int $error
	 * @param \System\UInt32 $userNameMaxLength
	 * @param \System\Char* $userName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleGetImpersonationUserNameError($error, $userNameMaxLength, $userName){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::FlushAsync_1 ($cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::FlushAsync_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FlushAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::Read_1 ($buffer, $offset, $count)
	 * @uses NamedPipeServerStreamMethodsOverride::Read_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Read(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::ReadAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::ReadAsync_2 ($buffer, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::ReadAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::Write_1 ($buffer, $offset, $count)
	 * @uses NamedPipeServerStreamMethodsOverride::Write_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::WriteAsync_1 ($buffer, $offset, $count, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::WriteAsync_2 ($buffer, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::WriteAsync_3 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::CopyTo_1 ($destination)
	 * @uses NamedPipeServerStreamMethodsOverride::CopyTo_2 ($destination, $bufferSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::CopyToAsync_1 ($destination)
	 * @uses NamedPipeServerStreamMethodsOverride::CopyToAsync_2 ($destination, $bufferSize)
	 * @uses NamedPipeServerStreamMethodsOverride::CopyToAsync_3 ($destination, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::CopyToAsync_4 ($destination, $bufferSize, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyToAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::ReadExactlyAsync_1 ($buffer, $cancellationToken)
	 * @uses NamedPipeServerStreamMethodsOverride::ReadExactlyAsync_2 ($buffer, $offset, $count, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactlyAsync(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::ReadExactly_1 ($buffer)
	 * @uses NamedPipeServerStreamMethodsOverride::ReadExactly_2 ($buffer, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReadExactly(mixed ...$args){}
	/**
	 * @uses NamedPipeServerStreamMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses NamedPipeServerStreamMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
