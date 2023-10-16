<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AsyncTaskMethodBuilder extends \System\ValueType
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncTaskMethodBuilder
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
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_Task(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeTaskAsPromise(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetResult(){}
	/**
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	public  function SetException($exception){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	protected  function SetNotificationForWaitCompletion($enabled){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ObjectIdForDebugger(){}
}
