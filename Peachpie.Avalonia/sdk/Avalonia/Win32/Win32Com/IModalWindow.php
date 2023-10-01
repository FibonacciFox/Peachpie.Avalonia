<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IModalWindow
{
	/**
	 * @param \System\IntPtr $hwndOwner
	 */
	public function Show($hwndOwner);
}
