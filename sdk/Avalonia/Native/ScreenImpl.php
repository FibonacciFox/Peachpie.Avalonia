<?php
namespace Avalonia\Native;
/**
 */
class ScreenImpl extends \System\Object implements 
	\Avalonia\Platform\IScreenImpl,
	\System\IDisposable
{
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
	public  function Dispose(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
