<?php
namespace System\Threading;
/**
 */
class LogEntry extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $tickCount;
	/**
	 * @var \System\Threading\PortableThreadPool+HillClimbing+StateOrTransition
	 * @field
	 */
	public $stateOrTransition;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $newControlSetting;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $lastHistoryCount;
	/**
	 * @var \System\Single
	 * @field
	 */
	public $lastHistoryMean;
}
