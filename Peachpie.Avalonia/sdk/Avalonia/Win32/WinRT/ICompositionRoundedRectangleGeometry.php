<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionRoundedRectangleGeometry
{
	/**
	 */
	public function get_CornerRadius();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetCornerRadius($value);
	/**
	 */
	public function get_Offset();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetOffset($value);
	/**
	 */
	public function get_Size();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetSize($value);
}
