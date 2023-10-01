<?php
namespace Avalonia\Platform;
/**
 */
interface IMacOSTopLevelPlatformHandle
{
	/**
	 */
	public function get_NSView();
	/**
	 */
	public function GetNSViewRetained();
	/**
	 */
	public function get_NSWindow();
	/**
	 */
	public function GetNSWindowRetained();
}
