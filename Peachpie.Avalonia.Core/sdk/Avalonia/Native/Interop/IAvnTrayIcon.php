<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnTrayIcon
{
	/**
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 */
	public function SetIcon($data, $length);
	/**
	 * @param \Avalonia\Native\Interop\IAvnMenu $menu
	 */
	public function SetMenu($menu);
	/**
	 * @param \System\Int32|int $isVisible
	 */
	public function SetIsVisible($isVisible);
}
