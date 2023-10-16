<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AwaitTaskContinuationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function RunOrScheduleAction_1($action, $allowInlining){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function RunOrScheduleAction_2($box, $allowInlining){}
}
/**
 */
class AwaitTaskContinuation extends \System\Threading\Tasks\TaskContinuation implements 
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @var \System\Action
	 * @field
	 */
	protected readonly $m_action;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_continuationId;
	/**
	 * @param \System\Action_1 $action
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function CreateTask($action, $state, $scheduler){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsValidLocationForInlining(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @return \System\Threading\ContextCallback
	 */
	protected static function GetInvokeActionCallback(){}
	/**
	 * @param \System\Threading\ContextCallback $callback
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\Task& $currentTask
	 * @return \System\Void|void
	 */
	protected  function RunCallback($callback, $state, $currentTask){}
	/**
	 * @uses AwaitTaskContinuationMethodsOverride::RunOrScheduleAction_1 ($action, $allowInlining)
	 * @uses AwaitTaskContinuationMethodsOverride::RunOrScheduleAction_2 ($box, $allowInlining)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RunOrScheduleAction(mixed ...$args){}
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function UnsafeScheduleAction($action, $task){}
}
