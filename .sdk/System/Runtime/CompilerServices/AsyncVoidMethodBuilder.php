<?php
namespace System\Runtime\CompilerServices;
final class AsyncVoidMethodBuilder extends \System\ValueType
{


	/**
	 * @return \System\Runtime\CompilerServices\AsyncVoidMethodBuilder
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
	/**
	 * @return \System\Void|void
	 */
	public function SetResult(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public function SetException($exception){}
	private function NotifySynchronizationContextOfCompletion(){}
}