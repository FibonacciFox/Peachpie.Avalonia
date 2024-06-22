<?php
namespace System\Runtime\CompilerServices;
final class AsyncValueTaskMethodBuilder extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Threading\Tasks\ValueTask
	 * @since readonly
	 */
	public $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncValueTaskMethodBuilder
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
	 * @return \System\Void|void
	 */
	public function SetResult(){}
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