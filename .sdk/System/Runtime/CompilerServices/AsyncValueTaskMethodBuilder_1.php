<?php
namespace System\Runtime\CompilerServices;
final class AsyncValueTaskMethodBuilder_1 extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static $s_syncSuccessSentinel;
	/**
	 * @property
	 * @var \System\Threading\Tasks\ValueTask_1[TResult]
	 * @since readonly
	 */
	public $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncValueTaskMethodBuilder_1[TResult]
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
	 * @param \TResult $result
	 * @return \System\Void|void
	 */
	public function SetResult($result){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public function SetException($exception){}
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
}