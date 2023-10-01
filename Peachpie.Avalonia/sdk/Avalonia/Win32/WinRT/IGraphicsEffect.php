<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IGraphicsEffect
{
	/**
	 */
	public function get_Name();
	/**
	 * @param \System\IntPtr $name
	 */
	public function SetName($name);
}
