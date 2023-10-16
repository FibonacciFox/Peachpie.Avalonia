<?php
namespace System\IO\Pipelines;
/**
 */
class SchedulingContext extends \System\Object
{
	/**
	 * @var \System\Threading\SynchronizationContext
	 * @property
	 */
	public $SynchronizationContext;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @property
	 */
	public $ExecutionContext;
	/**
	 * @return \System\Threading\SynchronizationContext
	 */
	public  function get_SynchronizationContext(){}
	/**
	 * @param \System\Threading\SynchronizationContext $value
	 * @return \System\Void|void
	 */
	public  function set_SynchronizationContext($value){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	public  function get_ExecutionContext(){}
	/**
	 * @param \System\Threading\ExecutionContext $value
	 * @return \System\Void|void
	 */
	public  function set_ExecutionContext($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
