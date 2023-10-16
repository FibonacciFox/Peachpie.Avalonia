<?php
namespace System\Threading\Tasks;
/**
 */
class TaskAsyncResult extends \System\Object implements 
	\System\IAsyncResult
{
	/**
	 * @var \System\Threading\Tasks\Task
	 * @field
	 */
	protected readonly $_task;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $AsyncState;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CompletedSynchronously;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @var \System\Threading\WaitHandle
	 * @property
	 */
	public readonly $AsyncWaitHandle;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvokeCallback(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_AsyncState(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CompletedSynchronously(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Threading\WaitHandle
	 */
	public  function get_AsyncWaitHandle(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
