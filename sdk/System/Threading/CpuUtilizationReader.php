<?php
namespace System\Threading;
/**
 */
class CpuUtilizationReader extends \System\ValueType
{
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $_idleTime;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $_kernelTime;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $_userTime;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentUtilization;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentUtilization(){}
}
