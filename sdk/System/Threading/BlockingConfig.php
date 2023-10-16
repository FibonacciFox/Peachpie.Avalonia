<?php
namespace System\Threading;
/**
 */
class BlockingConfig extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $IsCooperativeBlockingEnabled;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $IgnoreMemoryUsage;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public readonly $ThreadsToAddWithoutDelay;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public readonly $ThreadsPerDelayStep;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public readonly $DelayStepMs;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public readonly $MaxDelayMs;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
