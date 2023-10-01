<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositor6
{
	/**
	 */
	public function CreateGeometricClip();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionGeometry $geometry
	 */
	public function CreateGeometricClipWithGeometry($geometry);
}
