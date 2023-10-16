<?php
namespace System\Threading\Tasks\Sources;
/**
 */
interface IValueTaskSource
{
	/**
	 * @param \System\Int16 $token
	 */
	public function GetStatus($token);
	/**
	 * @param \System\Action_1 $continuation
	 * @param \System\Object|object $state
	 * @param \System\Int16 $token
	 * @param \System\Threading\Tasks\Sources\ValueTaskSourceOnCompletedFlags $flags
	 */
	public function OnCompleted($continuation, $state, $token, $flags);
	/**
	 * @param \System\Int16 $token
	 */
	public function GetResult($token);
}
