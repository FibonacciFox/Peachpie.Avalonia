<?php
namespace System\Threading;
class GateThread extends \System\Object
{


	private static function GateThreadStart(){}
	/**
	 * @param \System\Threading\PortableThreadPool $threadPoolInstance
	 * @return \System\Void|void
	 */
	public static function Wake($threadPoolInstance){}
	private static function SufficientDelaySinceLastDequeue($threadPoolInstance){}
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
	private static function GetRunningStateForNumRuns($numRuns){}
	private static function CreateGateThread($threadPoolInstance){}
}