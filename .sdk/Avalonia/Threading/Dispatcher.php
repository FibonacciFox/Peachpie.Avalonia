<?php
namespace Avalonia\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DispatcherOverride {
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Invoke_1 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Invoke_2 ($callback, $priority){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Invoke_3 ($callback, $priority, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\TimeSpan $timeout
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Invoke_4 ($callback, $priority, $cancellationToken, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @return \TResult
	 */
	#[MethodOverride]public function Invoke_5 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \TResult
	 */
	#[MethodOverride]public function Invoke_6 ($callback, $priority){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \TResult
	 */
	#[MethodOverride]public function Invoke_7 ($callback, $priority, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\TimeSpan $timeout
	 * @return \TResult
	 */
	#[MethodOverride]public function Invoke_8 ($callback, $priority, $cancellationToken, $timeout){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride]public function InvokeAsync_1 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride]public function InvokeAsync_2 ($callback, $priority){}
	/**
	 * @deprecated
	 * @param \System\Action $callback
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	#[MethodOverride]public function InvokeAsync_3 ($callback, $priority, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride]public function InvokeAsync_4 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride]public function InvokeAsync_5 ($callback, $priority){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \Avalonia\Threading\DispatcherOperation_1
	 */
	#[MethodOverride]public function InvokeAsync_6 ($callback, $priority, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: System\Threading\Tasks\Task]
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function InvokeAsync_7 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: System\Threading\Tasks\Task]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function InvokeAsync_8 ($callback, $priority){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $action [generic: System\Threading\Tasks\Task_1[TResult]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function InvokeAsync_9 ($action){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $action [generic: System\Threading\Tasks\Task_1[TResult]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function InvokeAsync_10 ($action, $priority){}
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Post_1 ($action, $priority){}
	/**
	 * @deprecated
	 * @param \System\Threading\SendOrPostCallback $action
	 * @param \System\Object|object $arg
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Post_2 ($action, $arg, $priority){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task $task
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\DispatcherPriorityAwaitable
	 */
	#[MethodOverride]public function AwaitWithPriority_1 ($task, $priority){}
	/**
	 * @deprecated
	 * @param \System\Threading\Tasks\Task_1 $task [generic: T]
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\DispatcherPriorityAwaitable_1
	 */
	#[MethodOverride]public function AwaitWithPriority_2 ($task, $priority){}
	/**
	 * @deprecated
	 * @param \System\Nullable_1 $priority [generic: Avalonia\Threading\DispatcherPriority]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RunJobs_1 ($priority){}
	/**
	 * @deprecated
	 * @param \System\Nullable_1 $priority [generic: Avalonia\Threading\DispatcherPriority]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RunJobs_2 ($priority, $cancellationToken){}
}
class Dispatcher extends \System\Object implements
	\Avalonia\Threading\IDispatcher
{
	use DispatcherOverride;
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public static $UIThread;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $SupportsRunLoops;
	private static function CreateUIThreadDispatcher(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public function VerifyAccess(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \Avalonia\Threading\AvaloniaSynchronizationContext
	 */
	protected function GetContextWithPriority($priority){}
	/**
	 * @uses DispatcherOverride::Invoke_1 <br>public , args: ($callback)<br>
	 * @uses DispatcherOverride::Invoke_2 <br>public , args: ($callback, $priority)<br>
	 * @uses DispatcherOverride::Invoke_3 <br>public , args: ($callback, $priority, $cancellationToken)<br>
	 * @uses DispatcherOverride::Invoke_4 <br>public , args: ($callback, $priority, $cancellationToken, $timeout)<br>
	 * @uses DispatcherOverride::Invoke_5 <br>public , args: ($callback)<br>
	 * @uses DispatcherOverride::Invoke_6 <br>public , args: ($callback, $priority)<br>
	 * @uses DispatcherOverride::Invoke_7 <br>public , args: ($callback, $priority, $cancellationToken)<br>
	 * @uses DispatcherOverride::Invoke_8 <br>public , args: ($callback, $priority, $cancellationToken, $timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\TResult|mixed|\override
	 */
	#[MethodOverridePublic]function Invoke (\override ...$args){}
	/**
	 * @uses DispatcherOverride::InvokeAsync_1 <br>public , args: ($callback)<br>
	 * @uses DispatcherOverride::InvokeAsync_2 <br>public , args: ($callback, $priority)<br>
	 * @uses DispatcherOverride::InvokeAsync_3 <br>public , args: ($callback, $priority, $cancellationToken)<br>
	 * @uses DispatcherOverride::InvokeAsync_4 <br>public , args: ($callback)<br>
	 * @uses DispatcherOverride::InvokeAsync_5 <br>public , args: ($callback, $priority)<br>
	 * @uses DispatcherOverride::InvokeAsync_6 <br>public , args: ($callback, $priority, $cancellationToken)<br>
	 * @uses DispatcherOverride::InvokeAsync_7 <br>public , args: ($callback)<br>
	 * @uses DispatcherOverride::InvokeAsync_8 <br>public , args: ($callback, $priority)<br>
	 * @uses DispatcherOverride::InvokeAsync_9 <br>public , args: ($action)<br>
	 * @uses DispatcherOverride::InvokeAsync_10 <br>public , args: ($action, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Threading\DispatcherOperation|\Avalonia\Threading\DispatcherOperation_1|\System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function InvokeAsync (\override ...$args){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	protected function InvokeAsyncImpl($operation, $cancellationToken){}
	private function InvokeImpl($operation, $cancellationToken, $timeout){}
	/**
	 * @uses DispatcherOverride::Post_1 <br>public , args: ($action, $priority)<br>
	 * @uses DispatcherOverride::Post_2 <br>public , args: ($action, $arg, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Post (\override ...$args){}
	/**
	 * @uses DispatcherOverride::AwaitWithPriority_1 <br>public , args: ($task, $priority)<br>
	 * @uses DispatcherOverride::AwaitWithPriority_2 <br>public , args: ($task, $priority)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Threading\DispatcherPriorityAwaitable|\Avalonia\Threading\DispatcherPriorityAwaitable_1|mixed|\override
	 */
	#[MethodOverridePublic]function AwaitWithPriority (\override ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ShutdownStarted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ShutdownStarted($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ShutdownFinished($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ShutdownFinished($value){}
	/**
	 * @param \Avalonia\Threading\DispatcherFrame $frame
	 * @return \System\Void|void
	 */
	public function PushFrame($frame){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public function MainLoop($cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public function ExitAllFrames(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public function BeginInvokeShutdown($priority){}
	/**
	 * @return \System\Void|void
	 */
	public function InvokeShutdown(){}
	private function StartShutdownImpl(){}
	private function ShutdownImpl(){}
	/**
	 * @return \Avalonia\Threading\Dispatcher+DispatcherProcessingDisabled
	 */
	public function DisableProcessing(){}
	private function RequestBackgroundProcessing(){}
	private function OnReadyForExplicitBackgroundProcessing(){}
	/**
	 * @uses DispatcherOverride::RunJobs_1 <br>public , args: ($priority)<br>
	 * @uses DispatcherOverride::RunJobs_2 <br>protected , args: ($priority, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RunJobs (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetBeforeUnitTests(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ResetForUnitTests(){}
	private function ExecuteJob($job){}
	private function Signaled(){}
	private function ExecuteJobsCore($fromExplicitBackgroundProcessingCallback){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function RequestProcessing(){}
	private function RequestForegroundProcessing(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @return \System\Void|void
	 */
	protected function Abort($operation){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $operation
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Boolean|bool
	 */
	protected function SetPriority($operation, $priority){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Boolean|bool
	 */
	public function HasJobsWithPriority($priority){}
	private function UpdateOSTimer(){}
	/**
	 * @return \System\Void|void
	 */
	protected function RescheduleTimers(){}
	/**
	 * @param \Avalonia\Threading\DispatcherTimer $timer
	 * @return \System\Void|void
	 */
	protected function AddTimer($timer){}
	/**
	 * @param \Avalonia\Threading\DispatcherTimer $timer
	 * @return \System\Void|void
	 */
	protected function RemoveTimer($timer){}
	private function OnOSTimer(){}
	/**
	 * @return \System\Void|void
	 */
	protected function PromoteTimers(){}
	/**
	 * @return \System\Collections\Generic\List_1[Avalonia\Threading\DispatcherTimer]
	 */
	protected static function SnapshotTimersForUnitTests(){}
}