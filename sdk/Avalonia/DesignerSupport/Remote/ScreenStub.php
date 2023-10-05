<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class ScreenStub extends \System\Object implements 
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
