<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WaitThreadOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function UnregisterWait_1 ($handle){}
	/**
	 * @deprecated
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @param \System\Boolean|bool $blocking
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function UnregisterWait_2 ($handle, $blocking){}
}
final class WaitThread extends \System\Object
{
	use WaitThreadOverride;

	private function WaitThreadStart(){}
	private function ProcessRemovals(){}
	private function QueueWaitCompletion($registeredHandle, $timedOut){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $handle
	 * @return \System\Boolean|bool
	 */
	public function RegisterWaitHandle($handle){}
	/**
	 * @uses WaitThreadOverride::UnregisterWait_1 <br>public , args: ($handle)<br>
	 * @uses WaitThreadOverride::UnregisterWait_2 <br>private , args: ($handle, $blocking)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function UnregisterWait (\override ...$args){}
	/**
	 */
	public function __construct(){}
}