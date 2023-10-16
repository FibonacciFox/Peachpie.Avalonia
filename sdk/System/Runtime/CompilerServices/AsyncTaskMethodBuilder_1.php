<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AsyncTaskMethodBuilder_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AwaitOnCompleted_1($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AwaitOnCompleted_2($awaiter, $stateMachine, $taskField){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AwaitUnsafeOnCompleted_1($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AwaitUnsafeOnCompleted_2($awaiter, $stateMachine, $taskField){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AwaitUnsafeOnCompleted_3($awaiter, $box){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetException_1($exception){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function SetException_2($exception, $taskField){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetNotificationForWaitCompletion_1($enabled){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function SetNotificationForWaitCompletion_2($enabled, $taskField){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AsyncTaskMethodBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncTaskMethodBuilder_1
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
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::AwaitOnCompleted_1 ($awaiter, $stateMachine)
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::AwaitOnCompleted_2 ($awaiter, $stateMachine, $taskField)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AwaitOnCompleted(mixed ...$args){}
	/**
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::AwaitUnsafeOnCompleted_1 ($awaiter, $stateMachine)
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::AwaitUnsafeOnCompleted_2 ($awaiter, $stateMachine, $taskField)
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::AwaitUnsafeOnCompleted_3 ($awaiter, $box)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AwaitUnsafeOnCompleted(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @param \System\Threading\Tasks\Task_1& $taskField
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStateMachineBox($stateMachine, $taskField){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDebugFinalizableAsyncStateMachineBox(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function get_Task(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeTaskAsPromise(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected static function CreateWeaklyTypedStateMachineBox(){}
	/**
	 * @param \System\Runtime\CompilerServices\TResult $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $task
	 * @param \System\Runtime\CompilerServices\TResult $result
	 * @return \System\Void|void
	 */
	protected static function SetExistingTaskResult($task, $result){}
	/**
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::SetException_1 ($exception)
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::SetException_2 ($exception, $taskField)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetException(mixed ...$args){}
	/**
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::SetNotificationForWaitCompletion_1 ($enabled)
	 * @uses AsyncTaskMethodBuilder_1MethodsOverride::SetNotificationForWaitCompletion_2 ($enabled, $taskField)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetNotificationForWaitCompletion(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_ObjectIdForDebugger(){}
}
