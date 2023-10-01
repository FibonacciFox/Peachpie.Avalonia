<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionShape
{
	/**
	 */
	public function get_CenterPoint();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetCenterPoint($value);
}
