<?php
namespace System\Threading;
final class LowLevelLock extends \System\Object implements
	\System\IDisposable
{


	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function TryAcquire(){}
	private function TryAcquire_NoFastPath($state){}
	private static function SpinWaitTryAcquireCallback($state){}
	/**
	 * @return \System\Void|void
	 */
	public function Acquire(){}
	private function WaitAndAcquire(){}
	/**
	 * @return \System\Void|void
	 */
	public function Release(){}
	private function SignalWaiter(){}
	/**
	 */
	public function __construct(){}
}