<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDirect3D11TexturePlatformSurface
{
	/**
	 * @param \Avalonia\Platform\IPlatformGraphicsContext $graphicsContext
	 * @param \System\IntPtr $d3dDevice
	 */
	public function CreateRenderTarget($graphicsContext, $d3dDevice);
}
