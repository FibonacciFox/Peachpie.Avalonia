<?php
namespace Avalonia\Platform;
/**
 */
class ScreenHelper extends \System\Object
{
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @param \System\Collections\Generic\IReadOnlyList_1 $screens
	 * @return \Avalonia\Platform\Screen
	 */
	public static function ScreenFromPoint($point, $screens){}
	/**
	 * @param \Avalonia\PixelRect $bounds
	 * @param \System\Collections\Generic\IReadOnlyList_1 $screens
	 * @return \Avalonia\Platform\Screen
	 */
	public static function ScreenFromRect($bounds, $screens){}
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 * @param \System\Collections\Generic\IReadOnlyList_1 $screens
	 * @return \Avalonia\Platform\Screen
	 */
	public static function ScreenFromWindow($window, $screens){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
