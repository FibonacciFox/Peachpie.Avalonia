<?php
namespace Avalonia\Win32;
/**
 */
class OleContext extends \System\Object
{
	/**
	 * @return \Avalonia\Win32\OleContext
	 */
	protected static function get_Current(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidOleThread(){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $hwnd
	 * @param \Avalonia\Win32\Win32Com\IDropTarget $target
	 * @return \System\Boolean
	 */
	protected  function RegisterDragDrop($hwnd, $target){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $hwnd
	 * @return \System\Boolean
	 */
	protected  function UnregisterDragDrop($hwnd){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
