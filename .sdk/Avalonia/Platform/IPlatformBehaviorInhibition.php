<?php
namespace Avalonia\Platform;
interface IPlatformBehaviorInhibition
{


	/**
	 * @param \System\Boolean|bool $inhibitAppSleep
	 * @param \System\String|string $reason
	 * @return \System\Threading\Tasks\Task
	 */
	public function SetInhibitAppSleep($inhibitAppSleep, $reason);
}