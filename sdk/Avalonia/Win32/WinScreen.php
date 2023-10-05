<?php
namespace Avalonia\Win32;
/**
 */
class WinScreen extends \Avalonia\Platform\Screen
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $PixelDensity;
	/**
	 * @var \Avalonia\PixelRect
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \Avalonia\PixelRect
	 * @property
	 */
	public readonly $WorkingArea;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrimary;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Primary;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
}
