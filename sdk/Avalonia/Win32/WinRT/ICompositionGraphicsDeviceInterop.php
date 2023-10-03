<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionGraphicsDeviceInterop
{
	/**
	 */
	public function get_RenderingDevice();
	/**
	 * @param \MicroCom\Runtime\IUnknown $value
	 */
	public function SetRenderingDevice($value);
}
