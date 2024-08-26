<?php
namespace System\Runtime\CompilerServices;
final class TaskAwaiter extends \System\ValueType implements
	\System\Runtime\CompilerServices\ICriticalNotifyCompletion,
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\Runtime\CompilerServices\ITaskAwaiter
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task
	 */
	protected $m_task;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public function UnsafeOnCompleted($continuation){}
	/**
	 * @return \System\Void|void
	 */
	public function GetResult(){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function ValidateEnd($task){}
	private static function HandleNonSuccessAndDebuggerNotification($task){}
	private static function ThrowForNonSuccess($task){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Action $continuation
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @param \System\Boolean|bool $flowExecutionContext
	 * @return \System\Void|void
	 */
	protected static function OnCompletedInternal($task, $continuation, $continueOnCapturedContext, $flowExecutionContext){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $stateMachineBox
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Void|void
	 */
	protected static function UnsafeOnCompletedInternal($task, $stateMachineBox, $continueOnCapturedContext){}
	private static function OutputWaitEtwEvents($task, $continuation){}
}