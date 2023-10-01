<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionEffectBrush
{
	/**
	 * @param \System\IntPtr $name
	 */
	public function GetSourceParameter($name);
	/**
	 * @param \System\IntPtr $name
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $source
	 */
	public function SetSourceParameter($name, $source);
}
