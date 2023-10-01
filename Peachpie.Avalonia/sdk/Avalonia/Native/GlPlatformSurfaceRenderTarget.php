<?php
namespace Avalonia\Native;
/**
 */
class GlPlatformSurfaceRenderTarget extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession
	 */
	public  function BeginDraw(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
