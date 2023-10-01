<?php
namespace Avalonia\X11;
/**
 */
class X11Screens extends \System\Object implements 
	\Avalonia\Platform\IScreenImpl
{
	/**
	 * @param \Avalonia\X11\X11Info $info
	 * @param \Avalonia\X11\X11Screen[] $screens
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateWorkArea($info, $screens){}
	/**
	 * @param \Avalonia\X11\AvaloniaX11Platform $platform
	 * @return \Avalonia\X11\IX11Screens
	 */
	public static function Init($platform){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromPoint($point){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromRect($rect){}
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromWindow($window){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ScreenCount(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_AllScreens(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
