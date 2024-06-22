<?php
namespace System\Threading;
final class LowLevelLifoSemaphore extends \System\Object implements
	\System\IDisposable
{


	private function Create($maximumSignalCount){}
	/**
	 * @param \System\Int32|int $timeoutMs
	 * @return \System\Boolean|bool
	 */
	public function WaitCore($timeoutMs){}
	private static function WaitNative($handle, $timeoutMs){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function ReleaseCore($count){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Int32|int $timeoutMs
	 * @param \System\Boolean|bool $spinWait
	 * @return \System\Boolean|bool
	 */
	public function Wait($timeoutMs, $spinWait){}
	/**
	 * @param \System\Int32|int $releaseCount
	 * @return \System\Void|void
	 */
	public function Release($releaseCount){}
	private function WaitForSignal($timeoutMs){}
	/**
	 * @param \System\Int32|int $initialSignalCount
	 * @param \System\Int32|int $maximumSignalCount
	 * @param \System\Int32|int $spinCount
	 * @param \System\Action $onWait
	 */
	public function __construct($initialSignalCount, $maximumSignalCount, $spinCount, $onWait){}
}