<?php
namespace System\Threading\Tasks;
class Tasks extends \System\Object
{
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const Loop = '1';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const Invoke = '2';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const TaskExecute = '3';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const TaskWait = '4';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const ForkJoin = '5';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const TaskScheduled = '6';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const AwaitTaskContinuationScheduled = '7';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const TraceOperation = '8';
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTask
	 */
	const TraceSynchronousWork = '9';

}