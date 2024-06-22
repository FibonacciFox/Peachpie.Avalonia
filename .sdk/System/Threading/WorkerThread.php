<?php
namespace System\Threading;
class WorkerThread extends \System\Object
{


	private static function DetermineThreadsToKeepAlive(){}
	private static function WorkerThreadStart(){}
	private static function RemoveWorkingWorker($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	protected static function MaybeAddWorkingWorker($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Boolean|bool
	 */
	protected static function ShouldStopProcessingWorkNow($threadPoolInstance){}
	private static function TakeActiveRequest($threadPoolInstance){}
	private static function TryCreateWorkerThread(){}
}