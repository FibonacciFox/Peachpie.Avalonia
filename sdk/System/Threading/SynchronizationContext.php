<?php
namespace System\Threading;
/**
 */
class SynchronizationContext extends \System\Object
{
	/**
	 * @var \System\Threading\SynchronizationContext
	 * @property
	 */
	public readonly $Current;
	/**
	 * @param \System\Threading\SynchronizationContext $syncContext
	 * @param \System\IntPtr[] $waitHandles
	 * @param \System\Boolean $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvokeWaitMethodHelper($syncContext, $waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @return \System\Threading\SynchronizationContext
	 */
	public static function get_Current(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetWaitNotificationRequired(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsWaitNotificationRequired(){}
	/**
	 * @param \System\Threading\SendOrPostCallback $d
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function Send($d, $state){}
	/**
	 * @param \System\Threading\SendOrPostCallback $d
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function Post($d, $state){}
	/**
	 * @return \System\Void|void
	 */
	public  function OperationStarted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OperationCompleted(){}
	/**
	 * @param \System\IntPtr[] $waitHandles
	 * @param \System\Boolean $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	public  function Wait($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @param \System\IntPtr[] $waitHandles
	 * @param \System\Boolean $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	protected static function WaitHelper($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @param \System\Threading\SynchronizationContext $syncContext
	 * @return \System\Void|void
	 */
	public static function SetSynchronizationContext($syncContext){}
	/**
	 * @return \System\Threading\SynchronizationContext
	 */
	public  function CreateCopy(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
