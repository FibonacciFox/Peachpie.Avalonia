<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionColorBrush
{
	/**
	 */
	public function get_Color();
	/**
	 * @param \Avalonia\Win32\WinRT\WinRTColor $value
	 */
	public function SetColor($value);
}
