<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformLifetimeEventsImpl
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_ShutdownRequested($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_ShutdownRequested($value);
}
