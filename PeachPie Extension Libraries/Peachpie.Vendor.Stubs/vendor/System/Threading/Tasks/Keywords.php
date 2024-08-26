<?php
namespace System\Threading\Tasks;
class Keywords extends \System\Object
{
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const TaskTransfer = '1';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const Tasks = '2';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const Parallel = '4';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const AsyncCausalityOperation = '8';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const AsyncCausalityRelation = '16';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const AsyncCausalitySynchronousWork = '32';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const TaskStops = '64';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const TasksFlowActivityIds = '128';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const AsyncMethod = '256';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const TasksSetActivityIds = '65536';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const Debug = '131072';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	const DebugActivityId = '262144';

}