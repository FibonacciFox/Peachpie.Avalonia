<?php
namespace Avalonia\X11;
/**
 */
class SurfaceInfo extends \System\Object implements 
	\Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
