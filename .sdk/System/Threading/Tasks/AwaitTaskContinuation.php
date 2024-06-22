<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AwaitTaskContinuationOverride {
	/**
	 * @deprecated
	 * @param \System\Action $action
	 * @param \System\Boolean|bool $allowInlining
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function RunOrScheduleAction_1 ($action, $allowInlining){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @param \System\Boolean|bool $allowInlining
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function RunOrScheduleAction_2 ($box, $allowInlining){}
}
class AwaitTaskContinuation extends \System\Threading\Tasks\TaskContinuation implements
	\System\Threading\IThreadPoolWorkItem
{
	use AwaitTaskContinuationOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Action
	 */
	protected $m_action;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_continuationId;
	/**
	 * @param \System\Action_1 $action [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Threading\Tasks\TaskScheduler $scheduler
	 * @return \System\Threading\Tasks\Task
	 */
	protected function CreateTask($action, $state, $scheduler){}
	private function Execute(){}
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
	protected function RunCallback($callback, $state, $currentTask){}
	/**
	 * @uses AwaitTaskContinuationOverride::RunOrScheduleAction_1 <br>protected , args: ($action, $allowInlining)<br>
	 * @uses AwaitTaskContinuationOverride::RunOrScheduleAction_2 <br>protected , args: ($box, $allowInlining)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function RunOrScheduleAction (\override ...$args){}
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\Tasks\Task $task
	 * @return \System\Void|void
	 */
	protected static function UnsafeScheduleAction($action, $task){}
}