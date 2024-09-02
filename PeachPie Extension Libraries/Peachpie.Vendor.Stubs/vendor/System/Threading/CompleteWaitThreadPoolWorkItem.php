<?php
namespace System\Threading;
final class CompleteWaitThreadPoolWorkItem extends \System\Object implements
	\System\Threading\IThreadPoolWorkItem
{

	private function Execute(){}
	private function CompleteWait(){}
	/**
	 * @param \System\Threading\RegisteredWaitHandle $registeredWaitHandle
	 * @param \System\Boolean|bool $timedOut
	 */
	public function __construct($registeredWaitHandle, $timedOut){}
}