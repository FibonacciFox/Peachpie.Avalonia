<?php
namespace System\Threading;
class BlockingConfig extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public static $IsCooperativeBlockingEnabled;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public static $IgnoreMemoryUsage;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int16
	 */
	public static $ThreadsToAddWithoutDelay;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int16
	 */
	public static $ThreadsPerDelayStep;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public static $DelayStepMs;
	/**
	 * @field
	 * @since readonly
	 * @var \System\UInt32
	 */
	public static $MaxDelayMs;

}