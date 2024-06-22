<?php
namespace System\Threading;
final class RegisteredWaitHandle extends \System\MarshalByRefObject
{


	private static function IsValidHandle($handle){}
	/**
	 * @param \System\IntPtr $nativeRegisteredWaitHandle
	 * @return \System\Void|void
	 */
	protected function SetNativeRegisteredWaitHandle($nativeRegisteredWaitHandle){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnBeforeRegister(){}
	/**
	 * @param \System\Threading\WaitHandle $waitObject
	 * @return \System\Boolean|bool
	 */
	public function Unregister($waitObject){}
	private static function WaitHandleCleanupNative($handle){}
	private static function UnregisterWaitNative($handle, $waitObject){}
	private static function RentEvent(){}
	private static function ReturnEvent($resetEvent){}
	/**
	 * @return \System\Void|void
	 */
	protected function RestartTimeout(){}
	private function UnregisterPortable($waitObject){}
	private function SignalUserWaitHandle(){}
	/**
	 * @param \System\Boolean|bool $timedOut
	 * @return \System\Void|void
	 */
	protected function PerformCallback($timedOut){}
	/**
	 * @return \System\Void|void
	 */
	protected function RequestCallback(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnRemoveWait(){}
	private function CompleteCallbackRequest(){}
	/**
	 * @return \System\Void|void
	 */
	protected function WaitForCallbacks(){}
	/**
	 * @return \System\Void|void
	 */
	protected function WaitForRemoval(){}
}