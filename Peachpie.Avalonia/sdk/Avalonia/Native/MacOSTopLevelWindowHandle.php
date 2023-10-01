<?php
namespace Avalonia\Native;
/**
 */
class MacOSTopLevelWindowHandle extends \System\Object implements 
	\Avalonia\Platform\IPlatformHandle,
	\Avalonia\Platform\IMacOSTopLevelPlatformHandle
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
	 * @return \System\IntPtr
	 */
	public  function get_NSView(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_NSWindow(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetNSViewRetained(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetNSWindowRetained(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
