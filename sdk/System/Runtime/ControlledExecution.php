<?php
namespace System\Runtime;
/**
 */
class ControlledExecution extends \System\Object
{
	/**
	 * @param \System\Action $action
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Void|void
	 */
	public static function Run($action, $cancellationToken){}
	/**
	 * @param \System\Threading\ThreadHandle $thread
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AbortThread($thread){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResetAbortThread(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
