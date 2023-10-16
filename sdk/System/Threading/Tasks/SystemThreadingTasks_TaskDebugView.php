<?php
namespace System\Threading\Tasks;
/**
 */
class SystemThreadingTasks_TaskDebugView extends \System\Object
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $AsyncState;
	/**
	 * @var \System\Threading\Tasks\TaskCreationOptions
	 * @property
	 */
	public readonly $CreationOptions;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $Exception;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CancellationPending;
	/**
	 * @var \System\Threading\Tasks\TaskStatus
	 * @property
	 */
	public readonly $Status;
	/**
	 * @return \System\Object|object
	 */
	public  function get_AsyncState(){}
	/**
	 * @return \System\Threading\Tasks\TaskCreationOptions
	 */
	public  function get_CreationOptions(){}
	/**
	 * @return \System\Exception
	 */
	public  function get_Exception(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CancellationPending(){}
	/**
	 * @return \System\Threading\Tasks\TaskStatus
	 */
	public  function get_Status(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
