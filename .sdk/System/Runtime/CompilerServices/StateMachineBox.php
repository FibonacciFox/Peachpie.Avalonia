<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StateMachineBoxOverride {
	/**
	 * @deprecated
	 * @param \System\Int16 $token
	 * @return \TResult
	 */
	#[MethodOverride]private function GetResult_1 ($token){}
	/**
	 * @deprecated
	 * @param \System\Int16 $token
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function GetResult_2 ($token){}
}
class StateMachineBox extends \System\Object implements
	\System\Threading\Tasks\Sources\IValueTaskSource_1,
	\System\Threading\Tasks\Sources\IValueTaskSource
{
	use StateMachineBoxOverride;

	/**
	 * @field
	 * @var \System\Action
	 */
	protected $_moveNextAction;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	public $Context;
	/**
	 * @field
	 * @var \System\Threading\Tasks\Sources\ManualResetValueTaskSourceCore_1[TResult]
	 */
	protected $_valueTaskSource;
	/**
	 * @property
	 * @var \System\Int16
	 * @since readonly
	 */
	public $Version;
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
	 * @param \System\Action_1 $continuation [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation, $state, $token, $flags){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StateMachineBoxOverride::GetResult_1 <br>private , args: ($token)<br>
	 * @uses StateMachineBoxOverride::GetResult_2 <br>private , args: ($token)<br>
	 * @var mixed|\override ...$args
	 * @return \TResult|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function GetResult (\override ...$args){}
}