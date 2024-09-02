<?php
namespace System\Threading;
final class CacheLineSeparated extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Threading\PortableThreadPool+ThreadCounts
	 */
	public $counts;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $lastDequeueTime;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $priorCompletionCount;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $priorCompletedWorkRequestsTime;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $nextCompletedWorkRequestsTime;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $numRequestedWorkers;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $gateThreadRunningState;

}