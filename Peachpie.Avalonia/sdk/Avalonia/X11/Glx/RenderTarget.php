<?php
namespace Avalonia\X11\Glx;
/**
 */
class RenderTarget extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession
	 */
	public  function BeginDraw(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
