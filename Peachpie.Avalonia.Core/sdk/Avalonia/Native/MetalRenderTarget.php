<?php
namespace Avalonia\Native;
/**
 */
class MetalRenderTarget extends \System\Object implements 
	\Avalonia\Metal\IMetalPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Metal\IMetalPlatformSurfaceRenderingSession
	 */
	public  function BeginRendering(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
