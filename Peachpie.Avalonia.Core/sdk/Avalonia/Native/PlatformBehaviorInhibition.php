<?php
namespace Avalonia\Native;
/**
 */
class PlatformBehaviorInhibition extends \System\Object implements 
	\Avalonia\Platform\IPlatformBehaviorInhibition
{
	/**
	 * @param \System\Boolean $inhibitAppSleep
	 * @param \System\String|string $reason
	 * @return \System\Threading\Tasks\Task
	 */
	public  function SetInhibitAppSleep($inhibitAppSleep, $reason){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
