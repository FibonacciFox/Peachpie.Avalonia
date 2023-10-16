<?php
namespace System\Threading\Tasks;
/**
 */
class SynchronizationContextAwaitTaskContinuation extends \System\Threading\Tasks\AwaitTaskContinuation implements 
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
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PostAction($state){}
	/**
	 * @param \System\Int32|int $continuationId
	 * @param \System\Action $action
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetActionLogDelegate($continuationId, $action){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPostActionCallback(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
}
