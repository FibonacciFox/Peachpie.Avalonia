<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IDockProvider
{
	/**
	 * @param \Avalonia\Win32\Interop\Automation\DockPosition $dockPosition
	 */
	public function SetDockPosition($dockPosition);
	/**
	 */
	public function get_DockPosition();
}
