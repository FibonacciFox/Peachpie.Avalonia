<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AsyncOverSyncWithIoCancellationMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public static function InvokeAsync_1($action, $state, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public static function InvokeAsync_2($func, $state, $cancellationToken){}
}
/**
 */
class AsyncOverSyncWithIoCancellation extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem,
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Threading\AsyncOverSyncWithIoCancellation
	 */
	public  function GetAwaiter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function UnsafeOnCompleted($continuation){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @uses AsyncOverSyncWithIoCancellationMethodsOverride::InvokeAsync_1 ($action, $state, $cancellationToken)
	 * @uses AsyncOverSyncWithIoCancellationMethodsOverride::InvokeAsync_2 ($func, $state, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InvokeAsync(mixed ...$args){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\OperationCanceledException $originalOce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAppropriateCancellationException($cancellationToken, $originalOce){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RegisterCancellation($cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
