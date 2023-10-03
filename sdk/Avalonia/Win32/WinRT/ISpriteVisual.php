<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ISpriteVisual
{
	/**
	 */
	public function get_Brush();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $value
	 */
	public function SetBrush($value);
}
