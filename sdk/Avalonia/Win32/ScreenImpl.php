<?php
namespace Avalonia\Win32;
/**
 */
class ScreenImpl extends \System\Object implements 
	\Avalonia\Platform\IScreenImpl
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ScreenCount;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Screen]
	 * @property
	 */
	public readonly $AllScreens;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ScreenCount(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_AllScreens(){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvalidateScreensCache(){}
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromWindow($window){}
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
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindScreenByHandle($handle){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
