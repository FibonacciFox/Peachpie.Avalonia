<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SyncSuccessSentinelStateMachineBoxMethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\TResult
	 */
	#[MethodOverride] private  function GetResult_1($token){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetResult_2($token){}
}
/**
 */
class SyncSuccessSentinelStateMachineBox extends \System\Runtime\CompilerServices\StateMachineBox implements 
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource
{
	/**
	 * @var \System\Action
	 * @field
	 */
	protected $_moveNextAction;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	public $Context;
	/**
	 * @var \System\Threading\Tasks\Sources\ManualResetValueTaskSourceCore_1[TResult]
	 * @field
	 */
	protected $_valueTaskSource;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Version;
	/**
	 * @uses SyncSuccessSentinelStateMachineBoxMethodsOverride::GetResult_1 ($token)
	 * @uses SyncSuccessSentinelStateMachineBoxMethodsOverride::GetResult_2 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetResult(mixed ...$args){}
}
