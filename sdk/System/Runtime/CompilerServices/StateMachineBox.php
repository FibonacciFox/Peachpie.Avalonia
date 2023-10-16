<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StateMachineBoxMethodsOverride
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
class StateMachineBox extends \System\Object implements 
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
	 * @param \System\Runtime\CompilerServices\TResult $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function SetException($error){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public  function GetStatus($token){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Version(){}
	/**
	 * @uses StateMachineBoxMethodsOverride::GetResult_1 ($token)
	 * @uses StateMachineBoxMethodsOverride::GetResult_2 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetResult(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
