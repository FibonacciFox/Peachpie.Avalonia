<?php
namespace Avalonia\Native;
/**
 */
class GlPlatformSurfaceRenderingSession extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function get_Context(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsYFlipped(){}
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
