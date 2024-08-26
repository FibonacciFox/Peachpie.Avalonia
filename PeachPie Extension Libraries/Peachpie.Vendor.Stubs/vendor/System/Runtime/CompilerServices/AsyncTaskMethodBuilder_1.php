<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AsyncTaskMethodBuilder_1Override {
	/**
	 * @deprecated
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AwaitOnCompleted_1 ($awaiter, $stateMachine){}
	/**
	 * @deprecated
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @param \System\Threading\Tasks\Task_1 $taskField [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AwaitOnCompleted_2 ($awaiter, $stateMachine, $taskField){}
	/**
	 * @deprecated
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AwaitUnsafeOnCompleted_1 ($awaiter, $stateMachine){}
	/**
	 * @deprecated
	 * @param \TAwaiter& $awaiter
	 * @param \TStateMachine& $stateMachine
	 * @param \System\Threading\Tasks\Task_1 $taskField [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AwaitUnsafeOnCompleted_2 ($awaiter, $stateMachine, $taskField){}
	/**
	 * @deprecated
	 * @param \TAwaiter& $awaiter
	 * @param \System\Runtime\CompilerServices\IAsyncStateMachineBox $box
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AwaitUnsafeOnCompleted_3 ($awaiter, $box){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @param \System\Threading\Tasks\Task_1 $taskField [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function SetException_2 ($exception, $taskField){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $enabled
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetNotificationForWaitCompletion_1 ($enabled){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $enabled
	 * @param \System\Threading\Tasks\Task_1 $taskField [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function SetNotificationForWaitCompletion_2 ($enabled, $taskField){}
}
final class AsyncTaskMethodBuilder_1 extends \System\ValueType
{
	use AsyncTaskMethodBuilder_1Override;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task_1[TResult]
	 * @since readonly
	 */
	public $Task;
	/**
	 * @return \System\Runtime\CompilerServices\AsyncTaskMethodBuilder_1[TResult]
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
	 * @uses AsyncTaskMethodBuilder_1Override::AwaitOnCompleted_1 <br>public , args: ($awaiter, $stateMachine)<br>
	 * @uses AsyncTaskMethodBuilder_1Override::AwaitOnCompleted_2 <br>protected , args: ($awaiter, $stateMachine, $taskField)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AwaitOnCompleted (\override ...$args){}
	/**
	 * @uses AsyncTaskMethodBuilder_1Override::AwaitUnsafeOnCompleted_1 <br>public , args: ($awaiter, $stateMachine)<br>
	 * @uses AsyncTaskMethodBuilder_1Override::AwaitUnsafeOnCompleted_2 <br>protected , args: ($awaiter, $stateMachine, $taskField)<br>
	 * @uses AsyncTaskMethodBuilder_1Override::AwaitUnsafeOnCompleted_3 <br>protected , args: ($awaiter, $box)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AwaitUnsafeOnCompleted (\override ...$args){}
	private static function GetStateMachineBox($stateMachine, $taskField){}
	private static function CreateDebugFinalizableAsyncStateMachineBox(){}
	private function InitializeTaskAsPromise(){}
	/**
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	protected static function CreateWeaklyTypedStateMachineBox(){}
	/**
	 * @param \TResult $result
	 * @return \System\Void|void
	 */
	public function SetResult($result){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $task [generic: TResult]
	 * @param \TResult $result
	 * @return \System\Void|void
	 */
	protected static function SetExistingTaskResult($task, $result){}
	/**
	 * @uses AsyncTaskMethodBuilder_1Override::SetException_1 <br>public , args: ($exception)<br>
	 * @uses AsyncTaskMethodBuilder_1Override::SetException_2 <br>protected , args: ($exception, $taskField)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetException (\override ...$args){}
	/**
	 * @uses AsyncTaskMethodBuilder_1Override::SetNotificationForWaitCompletion_1 <br>protected , args: ($enabled)<br>
	 * @uses AsyncTaskMethodBuilder_1Override::SetNotificationForWaitCompletion_2 <br>protected , args: ($enabled, $taskField)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetNotificationForWaitCompletion (\override ...$args){}
}