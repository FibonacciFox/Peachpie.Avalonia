<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionTarget
{
	/**
	 */
	public function get_Root();
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $value
	 */
	public function SetRoot($value);
}
