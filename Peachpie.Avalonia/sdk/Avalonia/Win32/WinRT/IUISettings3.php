<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IUISettings3
{
	/**
	 * @param \Avalonia\Win32\WinRT\UIColorType $desiredColor
	 */
	public function GetColorValue($desiredColor);
}
