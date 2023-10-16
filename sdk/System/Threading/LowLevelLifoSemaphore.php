<?php
namespace System\Threading;
/**
 */
class LowLevelLifoSemaphore extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\Int32|int $timeoutMs
	 * @param \System\Boolean $spinWait
	 * @return \System\Boolean
	 */
	public  function Wait($timeoutMs, $spinWait){}
	/**
	 * @param \System\Int32|int $releaseCount
	 * @return \System\Void|void
	 */
	public  function Release($releaseCount){}
	/**
	 * @param \System\Int32|int $timeoutMs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitForSignal($timeoutMs){}
	/**
	 * @param \System\Int32|int $maximumSignalCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Create($maximumSignalCount){}
	/**
	 * @param \System\Int32|int $timeoutMs
	 * @return \System\Boolean
	 */
	public  function WaitCore($timeoutMs){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function ReleaseCore($count){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
