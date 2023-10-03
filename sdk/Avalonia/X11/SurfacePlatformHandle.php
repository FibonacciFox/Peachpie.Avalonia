<?php
namespace Avalonia\X11;
/**
 */
class SurfacePlatformHandle extends \System\Object implements 
	\Avalonia\Platform\INativePlatformHandleSurface,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
