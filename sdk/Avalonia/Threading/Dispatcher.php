<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DispatcherMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Invoke_1($callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Invoke_2($callback, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Invoke_3($callback, $priority, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Invoke_4($callback, $priority, $cancellationToken, $timeout){}
	/**
	 * @return \Avalonia\Threading\TResult
	 */
	#[MethodOverride] public  function Invoke_5($callback){}
	/**
	 * @return \Avalonia\Threading\TResult
	 */
	#[MethodOverride] public  function Invoke_6($callback, $priority){}
	/**
	 * @return \Avalonia\Threading\TResult
	 */
	#[MethodOverride] public  function Invoke_7($callback, $priority, $cancellationToken){}
	/**
	 * @return \Avalonia\Threading\TResult
	 */
	#[MethodOverride] public  function Invoke_8($callback, $priority, $cancellationToken, $timeout){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride] public  function InvokeAsync_1($callback){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride] public  function InvokeAsync_2($callback, $priority){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride] public  function InvokeAsync_3($callback, $priority, $cancellationToken){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride] public  function InvokeAsync_4($callback){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride] public  function InvokeAsync_5($callback, $priority){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride] public  function InvokeAsync_6($callback, $priority, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function InvokeAsync_7($callback){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function InvokeAsync_8($callback, $priority){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function InvokeAsync_9($action){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function InvokeAsync_10($action, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Post_1($action, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Post_2($action, $arg, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RunJobs_1($priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RunJobs_2($priority, $cancellationToken){}
}
/**
 */
class Dispatcher extends \System\Object implements 
	\Avalonia\Threading\IDispatcher
{
	/**
	 * @var \Avalonia\Threading\Dispatcher
	 * @property
	 */
	public readonly $UIThread;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsRunLoops;
	/**
	 * @return \System\Object|object
	 */
	protected  function get_InstanceLock(){}
	/**
	 * @return \Avalonia\Threading\Dispatcher
	 */
	public static function get_UIThread(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsRunLoops(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateUIThreadDispatcher(){}
	/**
	 * @return \System\Boolean
	 */
	public  function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public  function VerifyAccess(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\AvaloniaSynchronizationContext
	 */
	protected  function GetContextWithPriority($priority){}
	/**
	 * @uses DispatcherMethodsOverride::Invoke_1 ($callback)
	 * @uses DispatcherMethodsOverride::Invoke_2 ($callback, $priority)
	 * @uses DispatcherMethodsOverride::Invoke_3 ($callback, $priority, $cancellationToken)
	 * @uses DispatcherMethodsOverride::Invoke_4 ($callback, $priority, $cancellationToken, $timeout)
	 * @uses DispatcherMethodsOverride::Invoke_5 ($callback)
	 * @uses DispatcherMethodsOverride::Invoke_6 ($callback, $priority)
	 * @uses DispatcherMethodsOverride::Invoke_7 ($callback, $priority, $cancellationToken)
	 * @uses DispatcherMethodsOverride::Invoke_8 ($callback, $priority, $cancellationToken, $timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @uses DispatcherMethodsOverride::InvokeAsync_1 ($callback)
	 * @uses DispatcherMethodsOverride::InvokeAsync_2 ($callback, $priority)
	 * @uses DispatcherMethodsOverride::InvokeAsync_3 ($callback, $priority, $cancellationToken)
	 * @uses DispatcherMethodsOverride::InvokeAsync_4 ($callback)
	 * @uses DispatcherMethodsOverride::InvokeAsync_5 ($callback, $priority)
	 * @uses DispatcherMethodsOverride::InvokeAsync_6 ($callback, $priority, $cancellationToken)
	 * @uses DispatcherMethodsOverride::InvokeAsync_7 ($callback)
	 * @uses DispatcherMethodsOverride::InvokeAsync_8 ($callback, $priority)
	 * @uses DispatcherMethodsOverride::InvokeAsync_9 ($action)
	 * @uses DispatcherMethodsOverride::InvokeAsync_10 ($action, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeAsync(mixed ...$args){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	protected  function InvokeAsyncImpl($operation, $cancellationToken){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\TimeSpan $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeImpl($operation, $cancellationToken, $timeout){}
	/**
	 * @uses DispatcherMethodsOverride::Post_1 ($action, $priority)
	 * @uses DispatcherMethodsOverride::Post_2 ($action, $arg, $priority)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Post(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ExitAllFramesRequested(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ExitAllFramesRequested($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasShutdownStarted(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasShutdownStarted($value){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_DisabledProcessingCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function set_DisabledProcessingCount($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownStarted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownStarted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownFinished($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownFinished($value){}
	/**
	 * @param \Avalonia\Threading\DispatcherFrame $frame
	 * @return \System\Void|void
	 */
	public  function PushFrame($frame){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public  function MainLoop($cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExitAllFrames(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public  function BeginInvokeShutdown($priority){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvokeShutdown(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartShutdownImpl(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShutdownImpl(){}
	/**
	 * @return \Avalonia\Threading\DispatcherProcessingDisabled
	 */
	public  function DisableProcessing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RequestBackgroundProcessing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnReadyForExplicitBackgroundProcessing(){}
	/**
	 * @uses DispatcherMethodsOverride::RunJobs_1 ($priority)
	 * @uses DispatcherMethodsOverride::RunJobs_2 ($priority, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunJobs(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetBeforeUnitTests(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetForUnitTests(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $job
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteJob($job){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Signaled(){}
	/**
	 * @param \System\Boolean $fromExplicitBackgroundProcessingCallback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteJobsCore($fromExplicitBackgroundProcessingCallback){}
	/**
	 * @return \System\Boolean
	 */
	protected  function RequestProcessing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RequestForegroundProcessing(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @return \System\Void|void
	 */
	protected  function Abort($operation){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Boolean
	 */
	protected  function SetPriority($operation, $priority){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Boolean
	 */
	public  function HasJobsWithPriority($priority){}
	/**
	 * @return \System\Int64|int
	 */
	protected  function get_Now(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateOSTimer(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RescheduleTimers(){}
	/**
	 * @param \Avalonia\Threading\DispatcherTimer $timer
	 * @return \System\Void|void
	 */
	protected  function AddTimer($timer){}
	/**
	 * @param \Avalonia\Threading\DispatcherTimer $timer
	 * @return \System\Void|void
	 */
	protected  function RemoveTimer($timer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnOSTimer(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PromoteTimers(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected static function SnapshotTimersForUnitTests(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
