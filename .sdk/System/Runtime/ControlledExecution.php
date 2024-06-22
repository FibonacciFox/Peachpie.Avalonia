<?php
namespace System\Runtime;
class ControlledExecution extends \System\Object
{


	/**
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public static function Run($action, $cancellationToken){}
	private static function AbortThread($thread){}
	private static function ResetAbortThread(){}
}