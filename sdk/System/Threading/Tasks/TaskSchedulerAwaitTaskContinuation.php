<?php
namespace System\Threading\Tasks;
/**
 */
class TaskSchedulerAwaitTaskContinuation extends \System\Threading\Tasks\AwaitTaskContinuation implements 
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
}
