<?php
namespace System\Threading;
/**
 */
class QueueUserWorkItemCallbackBase extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @return \System\Void|void
	 */
	public  function Execute(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
