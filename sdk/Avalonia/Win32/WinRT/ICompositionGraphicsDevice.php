<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionGraphicsDevice
{
	/**
	 * @param \Avalonia\Win32\Interop\SIZE_F $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 */
	public function CreateDrawingSurface($sizePixels, $pixelFormat, $alphaMode);
	/**
	 * @param \System\Void* $handler
	 * @param \System\Void* $token
	 */
	public function AddRenderingDeviceReplaced($handler, $token);
	/**
	 * @param \System\Int32|int $token
	 */
	public function RemoveRenderingDeviceReplaced($token);
}
