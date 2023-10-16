<?php
namespace System\Threading;
/**
 */
class HillClimbing extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $IsDisabled;
	/**
	 * @var \System\Threading\PortableThreadPool+HillClimbing
	 * @field
	 */
	public readonly $ThreadPoolHillClimber;
	/**
	 * @param \System\Int32|int $currentThreadCount
	 * @param \System\Double|double $sampleDurationSeconds
	 * @param \System\Int32|int $numCompletions
	 * @return \System\ValueTuple_2
	 */
	public  function Update($currentThreadCount, $sampleDurationSeconds, $numCompletions){}
	/**
	 * @param \System\Int32|int $newThreadCount
	 * @param \System\Threading\StateOrTransition $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChangeThreadCount($newThreadCount, $state){}
	/**
	 * @param \System\Int32|int $newThreadCount
	 * @param \System\Double|double $throughput
	 * @param \System\Threading\StateOrTransition $stateOrTransition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LogTransition($newThreadCount, $throughput, $stateOrTransition){}
	/**
	 * @param \System\Int32|int $newThreadCount
	 * @param \System\Threading\StateOrTransition $state
	 * @return \System\Void|void
	 */
	public  function ForceChange($newThreadCount, $state){}
	/**
	 * @param \System\Double[] $samples
	 * @param \System\Int32|int $numSamples
	 * @param \System\Double|double $period
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetWaveComponent($samples, $numSamples, $period){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
