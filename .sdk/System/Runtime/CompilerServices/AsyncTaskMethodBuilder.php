<?php
namespace System\Runtime\CompilerServices;
final class AsyncTaskMethodBuilder extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncTaskMethodBuilder
	 */
	public static function Create(){}
	/**
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function Start($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @return \System\Void|void
	 */
	public function SetStateMachine($stateMachine){}
	/**
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function AwaitOnCompleted($awaiter, $stateMachine){}
	/**
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public function AwaitUnsafeOnCompleted($awaiter, $stateMachine){}
	private function InitializeTaskAsPromise(){}
	/**
	 * @return \System\Void|void
	 */
	public function SetResult(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public function SetException($exception){}
	/**
	 * @param \System\Boolean|bool $enabled
	 * @return \System\Void|void
	 */
	protected function SetNotificationForWaitCompletion($enabled){}
}