<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IDesktopWindowContentBridgeInterop
{
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @param \System\IntPtr $parentHwnd
	 */
	public function Initialize($compositor, $parentHwnd);
	/**
	 */
	public function get_HWnd();
	/**
	 */
	public function get_AppliedScaleFactor();
}
