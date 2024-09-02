<?php
namespace System\Threading\Tasks;
final class SynchronizationContextAwaitTaskContinuation extends \System\Threading\Tasks\AwaitTaskContinuation implements
	\System\Threading\IThreadPoolWorkItem
{
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
	private static function PostAction($state){}
	private static function GetActionLogDelegate($continuationId, $action){}
	private static function GetPostActionCallback(){}
	private function Execute(){}
}