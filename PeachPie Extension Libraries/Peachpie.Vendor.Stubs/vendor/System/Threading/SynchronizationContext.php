<?php
namespace System\Threading;
class SynchronizationContext extends \System\Object
{
	/**
	 * @property
	 * @var \System\Threading\SynchronizationContext
	 * @since readonly
	 */
	public $Current;
	private static function InvokeWaitMethodHelper($syncContext, $waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	protected function SetWaitNotificationRequired(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsWaitNotificationRequired(){}
	/**
	 * @param \System\Threading\SendOrPostCallback $d
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public function Send($d, $state){}
	/**
	 * @param \System\Threading\SendOrPostCallback $d
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public function Post($d, $state){}
	/**
	 * @return \System\Void|void
	 */
	public function OperationStarted(){}
	/**
	 * @return \System\Void|void
	 */
	public function OperationCompleted(){}
	/**
	 * @param \System\IntPtr $waitHandles
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	public function Wait($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @param \System\IntPtr $waitHandles
	 * @param \System\Boolean|bool $waitAll
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
	public function CreateCopy(){}
	/**
	 */
	public function __construct(){}
}