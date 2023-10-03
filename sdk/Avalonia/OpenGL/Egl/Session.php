<?php
namespace Avalonia\OpenGL\Egl;
/**
 */
class Session extends \System\Object implements 
	\Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderingSession,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
