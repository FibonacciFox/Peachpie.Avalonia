<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositorDesktopInterop
{
	/**
	 * @param \System\IntPtr $hwndTarget
	 * @param \System\Int32|int $isTopmost
	 */
	public function CreateDesktopWindowTarget($hwndTarget, $isTopmost);
	/**
	 * @param \System\Int32|int $threadId
	 */
	public function EnsureOnThread($threadId);
}
