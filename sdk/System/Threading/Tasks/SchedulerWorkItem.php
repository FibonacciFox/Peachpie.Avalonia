<?php
namespace System\Threading\Tasks;
/**
 */
class SchedulerWorkItem extends \System\Object implements 
	\System\Threading\IThreadPoolWorkItem
{
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
