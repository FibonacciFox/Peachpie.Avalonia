<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PoolingAsyncValueTaskMethodBuilder_1Override {
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @param \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox $boxFieldRef [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function SetException_2 ($exception, $boxFieldRef){}
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
	 * @param \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox $box [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AwaitOnCompleted_2 ($awaiter, $stateMachine, $box){}
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
	 * @param \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox $boxRef [generic: TResult]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AwaitUnsafeOnCompleted_2 ($awaiter, $stateMachine, $boxRef){}
}
final class PoolingAsyncValueTaskMethodBuilder_1 extends \System\ValueType
{
	use PoolingAsyncValueTaskMethodBuilder_1Override;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox[TResult]
	 */
	protected static $s_syncSuccessSentinel;
	/**
	 * @property
	 * @var \System\Threading\Tasks\ValueTask_1[TResult]
	 * @since readonly
	 */
	public $Task;
	/**
	 * @return \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1[TResult]
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
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::SetException_1 <br>public , args: ($exception)<br>
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::SetException_2 <br>protected , args: ($exception, $boxFieldRef)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetException (\override ...$args){}
	/**
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::AwaitOnCompleted_1 <br>public , args: ($awaiter, $stateMachine)<br>
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::AwaitOnCompleted_2 <br>protected , args: ($awaiter, $stateMachine, $box)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AwaitOnCompleted (\override ...$args){}
	/**
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::AwaitUnsafeOnCompleted_1 <br>public , args: ($awaiter, $stateMachine)<br>
	 * @uses PoolingAsyncValueTaskMethodBuilder_1Override::AwaitUnsafeOnCompleted_2 <br>protected , args: ($awaiter, $stateMachine, $boxRef)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AwaitUnsafeOnCompleted (\override ...$args){}
	private static function GetStateMachineBox($stateMachine, $boxFieldRef){}
	/**
	 * @return \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox[TResult]
	 */
	protected static function CreateWeaklyTypedStateMachineBox(){}
}