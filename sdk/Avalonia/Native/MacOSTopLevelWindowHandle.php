<?php
namespace Avalonia\Native;
/**
 */
class MacOSTopLevelWindowHandle extends \System\Object implements 
	\Avalonia\Platform\IPlatformHandle,
	\Avalonia\Platform\IMacOSTopLevelPlatformHandle
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $HandleDescriptor;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NSView;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NSWindow;
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
