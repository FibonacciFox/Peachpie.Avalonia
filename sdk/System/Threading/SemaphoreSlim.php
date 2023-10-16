<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SemaphoreSlimMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Wait_2($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_4($timeout, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_5($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Wait_6($millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_1(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function WaitAsync_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_3($millisecondsTimeout){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_4($timeout){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_5($timeout, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function WaitAsync_6($millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Release_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Release_2($releaseCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class SemaphoreSlim extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentCount;
	/**
	 * @var \System\Threading\WaitHandle
	 * @property
	 */
	public readonly $AvailableWaitHandle;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentCount(){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	public  function get_AvailableWaitHandle(){}
	/**
	 * @uses SemaphoreSlimMethodsOverride::Wait_1 ()
	 * @uses SemaphoreSlimMethodsOverride::Wait_2 ($cancellationToken)
	 * @uses SemaphoreSlimMethodsOverride::Wait_3 ($timeout)
	 * @uses SemaphoreSlimMethodsOverride::Wait_4 ($timeout, $cancellationToken)
	 * @uses SemaphoreSlimMethodsOverride::Wait_5 ($millisecondsTimeout)
	 * @uses SemaphoreSlimMethodsOverride::Wait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Wait(mixed ...$args){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\UInt32 $startTime
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitUntilCountOrTimeout($millisecondsTimeout, $startTime, $cancellationToken){}
	/**
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_1 ()
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_2 ($cancellationToken)
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_3 ($millisecondsTimeout)
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_4 ($timeout)
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_5 ($timeout, $cancellationToken)
	 * @uses SemaphoreSlimMethodsOverride::WaitAsync_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WaitAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateAndAddAsyncWaiter(){}
	/**
	 * @param \System\Threading\TaskNode $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAsyncWaiter($task){}
	/**
	 * @param \System\Threading\TaskNode $asyncWaiter
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitUntilCountOrTimeoutAsync($asyncWaiter, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @uses SemaphoreSlimMethodsOverride::Release_1 ()
	 * @uses SemaphoreSlimMethodsOverride::Release_2 ($releaseCount)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Release(mixed ...$args){}
	/**
	 * @uses SemaphoreSlimMethodsOverride::Dispose_1 ()
	 * @uses SemaphoreSlimMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CancellationTokenCanceledEventHandler($obj){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckDispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
