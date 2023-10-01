<?php
namespace Avalonia\Metal;
/**
 */
interface IMetalPlatformSurface
{
	/**
	 * @param \Avalonia\Metal\IMetalDevice $device
	 */
	public function CreateMetalRenderTarget($device);
}
