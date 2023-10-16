<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StateMachineBox_1MethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\TResult
	 */
	#[MethodOverride] private  function GetResult_1($token){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetResult_2($token){}
	/**
	 * @return \System\Runtime\CompilerServices\TResult
	 */
	#[MethodOverride] private  function GetResult_3($token){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetResult_4($token){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class StateMachineBox_1 extends \System\Runtime\CompilerServices\StateMachineBox implements 
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource,
	\System\Runtime\CompilerServices\IAsyncStateMachineBox,
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @var \TStateMachine
	 * @field
	 */
	public $StateMachine;
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
	 * @var \System\Action
	 * @property
	 */
	public readonly $MoveNextAction;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Version;
	/**
	 * @return \System\Runtime\CompilerServices\StateMachineBox_1
	 */
	protected static function RentFromCache(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReturnToCache(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_PerCoreCacheSlot(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearStateUponCompletion(){}
	/**
	 * @param \System\Object|object $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExecutionContextCallback($s){}
	/**
	 * @return \System\Action
	 */
	public  function get_MoveNextAction(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @return \System\Void|void
	 */
	public  function MoveNext(){}
	/**
	 * @uses StateMachineBox_1MethodsOverride::GetResult_1 ($token)
	 * @uses StateMachineBox_1MethodsOverride::GetResult_2 ($token)
	 * @uses StateMachineBox_1MethodsOverride::GetResult_3 ($token)
	 * @uses StateMachineBox_1MethodsOverride::GetResult_4 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetResult(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStateMachineObject(){}
}
