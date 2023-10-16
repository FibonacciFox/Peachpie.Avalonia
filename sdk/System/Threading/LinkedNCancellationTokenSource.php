<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LinkedNCancellationTokenSourceMethodsOverride
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
}
/**
 */
class LinkedNCancellationTokenSource extends \System\Threading\CancellationTokenSource implements 
	\System\IDisposable
{
	/**
	 * @var \System\Action_1[System\Object]
	 * @field
	 */
	protected readonly $s_linkedTokenCancelDelegate;
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
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::Dispose_1 ($disposing)
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::Cancel_1 ()
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::Cancel_2 ($throwOnFirstException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Cancel(mixed ...$args){}
	/**
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::CancelAfter_1 ($delay)
	 * @uses LinkedNCancellationTokenSourceMethodsOverride::CancelAfter_2 ($millisecondsDelay)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CancelAfter(mixed ...$args){}
}
