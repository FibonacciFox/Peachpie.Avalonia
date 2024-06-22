<?php
namespace System\Threading;
final class HillClimbing extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public static $IsDisabled;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\PortableThreadPool+HillClimbing
	 */
	public static $ThreadPoolHillClimber;
	/**
	 * @param \System\Int32|int $currentThreadCount
	 * @param \System\Double|double $sampleDurationSeconds
	 * @param \System\Int32|int $numCompletions
	 * @return \System\ValueTuple_2[System\Int32,System\Int32]
	 */
	public function Update($currentThreadCount, $sampleDurationSeconds, $numCompletions){}
	private function ChangeThreadCount($newThreadCount, $state){}
	private function LogTransition($newThreadCount, $throughput, $stateOrTransition){}
	/**
	 * @param \System\Int32|int $newThreadCount
	 * @param \System\Threading\PortableThreadPool+HillClimbing+StateOrTransition $state
	 * @return \System\Void|void
	 */
	public function ForceChange($newThreadCount, $state){}
	private function GetWaveComponent($samples, $numSamples, $period){}
	/**
	 */
	public function __construct(){}
}