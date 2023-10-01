<?php
namespace Avalonia\Win32;
/**
 */
class WindowImplPlatformHandle extends \System\Object implements 
	\Avalonia\Platform\INativePlatformHandleSurface,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
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
