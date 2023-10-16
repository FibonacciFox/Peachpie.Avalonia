<?php
namespace System\Runtime\CompilerServices;
/**
 */
class ContinuationWrapper extends \System\Object
{
	/**
	 * @var \System\Action
	 * @field
	 */
	protected readonly $_continuation;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected readonly $_innerTask;
	/**
	 * @return \System\Void|void
	 */
	protected  function Invoke(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
