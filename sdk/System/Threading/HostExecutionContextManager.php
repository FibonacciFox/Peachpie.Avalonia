<?php
namespace System\Threading;
/**
 */
class HostExecutionContextManager extends \System\Object
{
	/**
	 * @return \System\Threading\HostExecutionContext
	 */
	public  function Capture(){}
	/**
	 * @param \System\Threading\HostExecutionContext $hostExecutionContext
	 * @return \System\Object|object
	 */
	public  function SetHostExecutionContext($hostExecutionContext){}
	/**
	 * @param \System\Object|object $previousState
	 * @return \System\Void|void
	 */
	public  function Revert($previousState){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
