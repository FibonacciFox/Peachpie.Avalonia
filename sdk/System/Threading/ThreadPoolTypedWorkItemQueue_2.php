<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ThreadPoolTypedWorkItemQueue_2 extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem
{
	/**
	 * @param \System\Threading\T $workItem
	 * @return \System\Void|void
	 */
	public  function BatchEnqueue($workItem){}
	/**
	 * @return \System\Void|void
	 */
	public  function CompleteBatchEnqueue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScheduleForProcessing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Execute(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
