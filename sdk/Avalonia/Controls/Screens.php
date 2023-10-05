<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScreensMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\Screen
	 */
	#[MethodOverride] public  function ScreenFromWindow_1($window){}
	/**
	 * @return \Avalonia\Platform\Screen
	 */
	#[MethodOverride] public  function ScreenFromWindow_2($window){}
}
/**
 */
class Screens extends \System\Object
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
	public readonly $All;
	/**
	 * @var \Avalonia\Platform\Screen
	 * @property
	 */
	public readonly $Primary;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ScreenCount(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_All(){}
	/**
	 * @return \Avalonia\Platform\Screen
	 */
	public  function get_Primary(){}
	/**
	 * @param \Avalonia\PixelRect $bounds
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromBounds($bounds){}
	/**
	 * @uses ScreensMethodsOverride::ScreenFromWindow_1 ($window)
	 * @uses ScreensMethodsOverride::ScreenFromWindow_2 ($window)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScreenFromWindow(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromPoint($point){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Platform\Screen
	 */
	public  function ScreenFromVisual($visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
