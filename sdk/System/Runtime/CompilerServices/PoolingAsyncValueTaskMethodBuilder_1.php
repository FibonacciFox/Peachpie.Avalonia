<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PoolingAsyncValueTaskMethodBuilder_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetException_1($exception){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function SetException_2($exception, $boxFieldRef){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AwaitOnCompleted_1($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AwaitOnCompleted_2($awaiter, $stateMachine, $box){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AwaitUnsafeOnCompleted_1($awaiter, $stateMachine){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AwaitUnsafeOnCompleted_2($awaiter, $stateMachine, $boxRef){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class PoolingAsyncValueTaskMethodBuilder_1 extends \System\ValueType
{
	/**
	 * @var \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1+StateMachineBox[TResult]
	 * @field
	 */
	protected readonly $s_syncSuccessSentinel;
	/**
	 * @var \System\Threading\Tasks\ValueTask_1[TResult]
	 * @property
	 */
	public readonly $Task;
	/**
	 * @return \System\Runtime\CompilerServices\PoolingAsyncValueTaskMethodBuilder_1
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
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::SetException_1 ($exception)
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::SetException_2 ($exception, $boxFieldRef)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetException(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function get_Task(){}
	/**
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::AwaitOnCompleted_1 ($awaiter, $stateMachine)
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::AwaitOnCompleted_2 ($awaiter, $stateMachine, $box)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AwaitOnCompleted(mixed ...$args){}
	/**
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::AwaitUnsafeOnCompleted_1 ($awaiter, $stateMachine)
	 * @uses PoolingAsyncValueTaskMethodBuilder_1MethodsOverride::AwaitUnsafeOnCompleted_2 ($awaiter, $stateMachine, $boxRef)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AwaitUnsafeOnCompleted(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\TStateMachine& $stateMachine
	 * @param \System\Runtime\CompilerServices\StateMachineBox& $boxFieldRef
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStateMachineBox($stateMachine, $boxFieldRef){}
	/**
	 * @return \System\Runtime\CompilerServices\StateMachineBox
	 */
	protected static function CreateWeaklyTypedStateMachineBox(){}
}
