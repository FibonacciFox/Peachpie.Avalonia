<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnPlatformSettings
{
	/**
	 */
	public function get_PlatformTheme();
	/**
	 */
	public function get_AccentColor();
	/**
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $callback
	 */
	public function RegisterColorsChange($callback);
}
