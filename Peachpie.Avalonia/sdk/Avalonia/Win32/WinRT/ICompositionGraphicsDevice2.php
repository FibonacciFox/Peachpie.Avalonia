<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionGraphicsDevice2
{
	/**
	 * @param \Avalonia\Win32\Interop\SIZE $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 */
	public function CreateDrawingSurface2($sizePixels, $pixelFormat, $alphaMode);
}
