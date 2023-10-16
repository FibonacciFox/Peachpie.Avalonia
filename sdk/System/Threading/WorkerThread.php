<?php
namespace System\Threading;
/**
 */
class WorkerThread extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WorkerThreadStart(){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveWorkingWorker($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	protected static function MaybeAddWorkingWorker($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Boolean
	 */
	protected static function ShouldStopProcessingWorkNow($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TakeActiveRequest($threadPoolInstance){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateWorkerThread(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
