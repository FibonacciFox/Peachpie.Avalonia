<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnPlatformBehaviorInhibition
{
	/**
	 * @param \System\Int32|int $inhibitAppSleep
	 * @param \System\String|string $reason
	 */
	public function SetInhibitAppSleep($inhibitAppSleep, $reason);
}
