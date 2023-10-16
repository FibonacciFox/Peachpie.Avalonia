<?php
namespace System\Diagnostics\Tracing;
/**
 */
class Messages extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $WorkerThread;
	/**
	 * @var \System\String
	 * @field
	 */
	public $MinMaxThreads;
	/**
	 * @var \System\String
	 * @field
	 */
	public $WorkerThreadAdjustmentSample;
	/**
	 * @var \System\String
	 * @field
	 */
	public $WorkerThreadAdjustmentAdjustment;
	/**
	 * @var \System\String
	 * @field
	 */
	public $WorkerThreadAdjustmentStats;
	/**
	 * @var \System\String
	 * @field
	 */
	public $IOEnqueue;
	/**
	 * @var \System\String
	 * @field
	 */
	public $IO;
	/**
	 * @var \System\String
	 * @field
	 */
	public $WorkingThreadCount;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
