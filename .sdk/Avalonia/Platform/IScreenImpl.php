<?php
namespace Avalonia\Platform;
interface IScreenImpl
{


	/**
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromWindow($window);
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromPoint($point);
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromRect($rect);
}