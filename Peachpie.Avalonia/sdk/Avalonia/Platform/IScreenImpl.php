<?php
namespace Avalonia\Platform;
/**
 */
interface IScreenImpl
{
	/**
	 */
	public function get_ScreenCount();
	/**
	 */
	public function get_AllScreens();
	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 */
	public function ScreenFromWindow($window);
	/**
	 * @param \Avalonia\PixelPoint $point
	 */
	public function ScreenFromPoint($point);
	/**
	 * @param \Avalonia\PixelRect $rect
	 */
	public function ScreenFromRect($rect);
}
