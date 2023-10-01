<?php
namespace Avalonia\X11;
/**
 */
class Randr15ScreensImpl extends \System\Object implements 
	\Avalonia\X11\IX11Screens
{
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($ev){}
	/**
	 * @param \System\IntPtr $rrOutput
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPhysicalMonitorSizeFromEDID($rrOutput){}
	/**
	 * @return \Avalonia\X11\X11Screen[]
	 */
	public  function get_Screens(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
