<?php
namespace System\Threading;
/**
 */
class GateThread extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GateThreadStart(){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	public static function Wake($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SufficientDelaySinceLastDequeue($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	protected static function EnsureRunning($threadPoolInstance){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	protected static function EnsureRunningSlow($threadPoolInstance){}
	/**
	 * @param \System\Int32|int $numRuns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRunningStateForNumRuns($numRuns){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGateThread($threadPoolInstance){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
