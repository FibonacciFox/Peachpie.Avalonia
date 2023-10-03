<?php
namespace Avalonia\Native;
/**
 */
class MetalPlatformSurface extends \System\Object implements 
	\Avalonia\Metal\IMetalPlatformSurface
{
	/**
	 * @param \Avalonia\Metal\IMetalDevice $device
	 * @return \Avalonia\Metal\IMetalPlatformSurfaceRenderTarget
	 */
	public  function CreateMetalRenderTarget($device){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
