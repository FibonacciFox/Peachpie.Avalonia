<?php
namespace System\Diagnostics\Tracing;
/**
 */
class Opcodes extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $IOEnqueue;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $IODequeue;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $IOPack;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $Wait;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $Sample;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $Adjustment;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	public $Stats;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
