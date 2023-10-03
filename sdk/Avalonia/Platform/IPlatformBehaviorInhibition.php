<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformBehaviorInhibition
{
	/**
	 * @param \System\Boolean $inhibitAppSleep
	 * @param \System\String|string $reason
	 */
	public function SetInhibitAppSleep($inhibitAppSleep, $reason);
}
