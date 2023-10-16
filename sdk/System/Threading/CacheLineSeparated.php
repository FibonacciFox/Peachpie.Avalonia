<?php
namespace System\Threading;
/**
 */
class CacheLineSeparated extends \System\ValueType
{
	/**
	 * @var \System\Threading\PortableThreadPool+ThreadCounts
	 * @field
	 */
	public $counts;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $lastDequeueTime;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $priorCompletionCount;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $priorCompletedWorkRequestsTime;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $nextCompletedWorkRequestsTime;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $numRequestedWorkers;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $gateThreadRunningState;
}
