<?php
namespace System\Threading\Tasks\Sources;
final class ManualResetValueTaskSourceCore_1 extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $RunContinuationsAsynchronously;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Version;
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @param \TResult $result
	 * @return \System\Void|void
	 */
	public function SetResult($result){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function SetException($error){}
	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public function GetStatus($token){}
	/**
	 * @param \System\Int16 $token
	 * @return \TResult
	 */
	public function GetResult($token){}
	private function ThrowForFailedGetResult($token){}
	/**
	 * @param \System\Action_1 $continuation [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation, $state, $token, $flags){}
	private function ValidateToken($token){}
	private function SignalCompletion(){}
	private function InvokeContinuationWithContext(){}
	private function InvokeSchedulerContinuation(){}
}