<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositedWindowSurface extends \System\Object implements 
	\Avalonia\Win32\DirectX\IDirect3D11TexturePlatformSurface,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IBlurHost
{
	/**
	 * @param \Avalonia\Platform\IPlatformGraphicsContext $context
	 * @param \System\IntPtr $d3dDevice
	 * @return \Avalonia\Win32\DirectX\IDirect3D11TextureRenderTarget
	 */
	public  function CreateRenderTarget($context, $d3dDevice){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Win32\WinRT\BlurEffect $enable
	 * @return \System\Void|void
	 */
	public  function SetBlur($enable){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
