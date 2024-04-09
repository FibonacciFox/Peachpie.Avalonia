<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ScreensOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\WindowBase $window
	 * @return \Avalonia\Platform\Screen
	 */
	#[MethodOverride]public function ScreenFromWindow_1 ($window){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IWindowBaseImpl $window
	 * @return \Avalonia\Platform\Screen
	 */
	#[MethodOverride]public function ScreenFromWindow_2 ($window){}
}
class Screens extends \System\Object
{
	use ScreensOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ScreenCount;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Screen]
	 * @since readonly
	 */
	public $All;
	/**
	 * @property
	 * @var \Avalonia\Platform\Screen
	 * @since readonly
	 */
	public $Primary;
	/**
	 * @param \Avalonia\PixelRect $bounds
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromBounds($bounds){}
	/**
	 * @uses ScreensOverride::ScreenFromWindow_1 <br>public , args: ($window)<br>
	 * @uses ScreensOverride::ScreenFromWindow_2 <br>public , args: ($window)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Platform\Screen|mixed|\override
	 */
	#[MethodOverridePublic]function ScreenFromWindow (\override ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromPoint($point){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Platform\Screen
	 */
	public function ScreenFromVisual($visual){}
	/**
	 * @param \Avalonia\Platform\IScreenImpl $iScreenImpl
	 */
	public function __construct($iScreenImpl){}
}