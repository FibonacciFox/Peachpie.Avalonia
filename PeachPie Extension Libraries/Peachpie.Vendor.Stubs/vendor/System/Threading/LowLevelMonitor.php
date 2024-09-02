<?php
namespace System\Threading;
final class LowLevelMonitor extends \System\ValueType
{

	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function Acquire(){}
	/**
	 * @return \System\Void|void
	 */
	public function Release(){}
	/**
	 * @return \System\Void|void
	 */
	public function Wait(){}
	/**
	 * @return \System\Void|void
	 */
	public function Signal_Release(){}
	/**
	 * @return \System\Void|void
	 */
	public function Initialize(){}
	private function DisposeCore(){}
	private function AcquireCore(){}
	private function ReleaseCore(){}
	private function WaitCore(){}
	private function Signal_ReleaseCore(){}
}