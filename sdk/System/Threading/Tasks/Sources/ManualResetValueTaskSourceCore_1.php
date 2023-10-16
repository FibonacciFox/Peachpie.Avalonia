<?php
namespace System\Threading\Tasks\Sources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ManualResetValueTaskSourceCore_1 extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $RunContinuationsAsynchronously;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Version;
	/**
	 * @return \System\Boolean
	 */
	public  function get_RunContinuationsAsynchronously(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_RunContinuationsAsynchronously($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Threading\Tasks\Sources\TResult $result
	 * @return \System\Void|void
	 */
	public  function SetResult($result){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function SetException($error){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Version(){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public  function GetStatus($token){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\TResult
	 */
	public  function GetResult($token){}
	/**
	 * @param \System\Int16 $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowForFailedGetResult($token){}
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @param \System\Int16 $token
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateToken($token){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SignalCompletion(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeContinuationWithContext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeSchedulerContinuation(){}
}
