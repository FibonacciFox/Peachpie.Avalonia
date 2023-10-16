<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Linked2CancellationTokenSourceMethodsOverride
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
class Linked2CancellationTokenSource extends \System\Threading\CancellationTokenSource implements 
	\System\IDisposable
{
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
	 * @uses Linked2CancellationTokenSourceMethodsOverride::Dispose_1 ($disposing)
	 * @uses Linked2CancellationTokenSourceMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses Linked2CancellationTokenSourceMethodsOverride::Cancel_1 ()
	 * @uses Linked2CancellationTokenSourceMethodsOverride::Cancel_2 ($throwOnFirstException)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Cancel(mixed ...$args){}
	/**
	 * @uses Linked2CancellationTokenSourceMethodsOverride::CancelAfter_1 ($delay)
	 * @uses Linked2CancellationTokenSourceMethodsOverride::CancelAfter_2 ($millisecondsDelay)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CancelAfter(mixed ...$args){}
}
