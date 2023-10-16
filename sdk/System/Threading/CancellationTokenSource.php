<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CancellationTokenSourceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Cancel_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Cancel_2($throwOnFirstException){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CancelAfter_1($delay){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CancelAfter_2($millisecondsDelay){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CancelAfter_3($millisecondsDelay){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride] public static function CreateLinkedTokenSource_1($token1, $token2){}
	/**
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride] public static function CreateLinkedTokenSource_2($token){}
	/**
	 * @return \System\Threading\CancellationTokenSource
	 */
	#[MethodOverride] public static function CreateLinkedTokenSource_3($tokens){}
}
/**
 */
class CancellationTokenSource extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Threading\CancellationTokenSource
	 * @field
	 */
	protected readonly $s_canceledSource;
	/**
	 * @var \System\Threading\CancellationTokenSource
	 * @field
	 */
	protected readonly $s_neverCanceledSource;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCancellationRequested;
	/**
	 * @var \System\Threading\CancellationToken
	 * @property
	 */
	public readonly $Token;
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TimerCallback($state){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCancellationRequested(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsCancellationCompleted(){}
	/**
	 * @return \System\Threading\CancellationToken
	 */
	public  function get_Token(){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	protected  function get_WaitHandle(){}
	/**
	 * @param \System\UInt32 $millisecondsDelay
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeWithTimer($millisecondsDelay){}
	/**
	 * @uses CancellationTokenSourceMethodsOverride::Cancel_1 ()
	 * @uses CancellationTokenSourceMethodsOverride::Cancel_2 ($throwOnFirstException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Cancel(mixed ...$args){}
	/**
	 * @uses CancellationTokenSourceMethodsOverride::CancelAfter_1 ($delay)
	 * @uses CancellationTokenSourceMethodsOverride::CancelAfter_2 ($millisecondsDelay)
	 * @uses CancellationTokenSourceMethodsOverride::CancelAfter_3 ($millisecondsDelay)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CancelAfter(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function TryReset(){}
	/**
	 * @uses CancellationTokenSourceMethodsOverride::Dispose_1 ()
	 * @uses CancellationTokenSourceMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @param \System\Delegate $callback
	 * @param \System\Object|object $stateForCallback
	 * @param \System\Threading\SynchronizationContext $syncContext
	 * @param \System\Threading\ExecutionContext $executionContext
	 * @return \System\Threading\CancellationTokenRegistration
	 */
	protected  function Register($callback, $stateForCallback, $syncContext, $executionContext){}
	/**
	 * @param \System\Boolean $throwOnFirstException
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyCancellation($throwOnFirstException){}
	/**
	 * @param \System\Boolean $throwOnFirstException
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteCallbackHandlers($throwOnFirstException){}
	/**
	 * @uses CancellationTokenSourceMethodsOverride::CreateLinkedTokenSource_1 ($token1, $token2)
	 * @uses CancellationTokenSourceMethodsOverride::CreateLinkedTokenSource_2 ($token)
	 * @uses CancellationTokenSourceMethodsOverride::CreateLinkedTokenSource_3 ($tokens)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateLinkedTokenSource(mixed ...$args){}
	/**
	 * @param \System\Delegate $d
	 * @param \System\Object|object $state
	 * @param \System\Threading\CancellationTokenSource $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Invoke($d, $state, $source){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
