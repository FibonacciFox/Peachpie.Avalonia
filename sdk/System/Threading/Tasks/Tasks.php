<?php
namespace System\Threading\Tasks;
/**
 */
class Tasks extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $Loop;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $Invoke;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $TaskExecute;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $TaskWait;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $ForkJoin;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $TaskScheduled;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $AwaitTaskContinuationScheduled;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $TraceOperation;
	/**
	 * @var \System\Diagnostics\Tracing\EventTask
	 * @field
	 */
	public $TraceSynchronousWork;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
