<?php
namespace System\Threading;
/**
 */
class _ThreadPoolWaitOrTimerCallback extends \System\Object
{
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitOrTimerCallback_Context_t($state){}
	/**
	 * @param \System\Object|object $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitOrTimerCallback_Context_f($state){}
	/**
	 * @param \System\Object|object $state
	 * @param \System\Boolean $timedOut
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WaitOrTimerCallback_Context($state, $timedOut){}
	/**
	 * @param \System\Threading\_ThreadPoolWaitOrTimerCallback $helper
	 * @param \System\Boolean $timedOut
	 * @return \System\Void|void
	 */
	protected static function PerformWaitOrTimerCallback($helper, $timedOut){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
