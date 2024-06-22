<?php
namespace System\Threading\Tasks\Sources;
interface IValueTaskSource_1
{


	/**
	 * @param \System\Int16 $token
	 * @return \System\Threading\Tasks\Sources\ValueTaskSourceStatus
	 */
	public function GetStatus($token);
	/**
	 * @param \System\Action_1 $continuation [generic: System\Object]
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 * @return \System\Void|void
	 */
	public function OnCompleted($continuation, $state, $token, $flags);
	/**
	 * @param \System\Int16 $token
	 * @return \TResult
	 */
	public function GetResult($token);
}