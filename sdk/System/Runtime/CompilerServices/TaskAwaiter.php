<?php
namespace System\Runtime\CompilerServices;
/**
 */
class TaskAwaiter extends \System\ValueType implements 
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\ITaskAwaiter
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected readonly $m_task;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
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
	 * @return \System\Void|void
	 */
	public  function GetResult(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function ValidateEnd($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandleNonSuccessAndDebuggerNotification($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowForNonSuccess($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Action $continuation
	 * @param \System\Boolean $continueOnCapturedContext
	 * @param \System\Boolean $flowExecutionContext
	 * @return \System\Void|void
	 */
	protected static function OnCompletedInternal($task, $continuation, $continueOnCapturedContext, $flowExecutionContext){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $stateMachineBox
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Void|void
	 */
	protected static function UnsafeOnCompletedInternal($task, $stateMachineBox, $continueOnCapturedContext){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Action $continuation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OutputWaitEtwEvents($task, $continuation){}
}
