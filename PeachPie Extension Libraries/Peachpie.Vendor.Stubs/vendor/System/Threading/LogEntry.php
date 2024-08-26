<?php
namespace System\Threading;
final class LogEntry extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $tickCount;
	/**
	 * @field
	 * @var \System\Threading\PortableThreadPool+HillClimbing+StateOrTransition
	 */
	public $stateOrTransition;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $newControlSetting;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $lastHistoryCount;
	/**
	 * @field
	 * @var \System\Single
	 */
	public $lastHistoryMean;

}