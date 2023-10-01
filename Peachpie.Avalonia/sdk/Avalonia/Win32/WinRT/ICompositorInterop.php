<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositorInterop
{
	/**
	 * @param \System\IntPtr $swapChain
	 */
	public function CreateCompositionSurfaceForHandle($swapChain);
	/**
	 * @param \MicroCom\Runtime\IUnknown $swapChain
	 */
	public function CreateCompositionSurfaceForSwapChain($swapChain);
	/**
	 * @param \MicroCom\Runtime\IUnknown $renderingDevice
	 */
	public function CreateGraphicsDevice($renderingDevice);
}
