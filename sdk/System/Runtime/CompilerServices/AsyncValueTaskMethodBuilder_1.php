<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AsyncValueTaskMethodBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 * @field
	 */
	protected readonly $s_syncSuccessSentinel;
	/**
	 * @var \System\Threading\Tasks\ValueTask_1[TResult]
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncValueTaskMethodBuilder_1
	 */
	public static function Create(){}
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function Start($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachine $stateMachine
	 * @return \System\Void|void
	 */
	public  function SetStateMachine($stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\TResult $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public  function SetException($exception){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function get_Task(){}
	/**
	 * @param \System\Runtime\CompilerServices\TAwaiter& $awaiter
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function AwaitOnCompleted($awaiter, $stateMachine){}
	/**
	 * @param \System\Runtime\CompilerServices\TAwaiter& $awaiter
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	public  function AwaitUnsafeOnCompleted($awaiter, $stateMachine){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ObjectIdForDebugger(){}
}
