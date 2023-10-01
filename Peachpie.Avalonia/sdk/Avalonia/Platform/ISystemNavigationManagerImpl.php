<?php
namespace Avalonia\Platform;
/**
 */
interface ISystemNavigationManagerImpl
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_BackRequested($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_BackRequested($value);
}
