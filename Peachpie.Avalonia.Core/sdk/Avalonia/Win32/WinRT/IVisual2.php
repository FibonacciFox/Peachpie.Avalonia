<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IVisual2
{
	/**
	 */
	public function get_ParentForTransform();
	/**
	 * @param \Avalonia\Win32\WinRT\IVisual $value
	 */
	public function SetParentForTransform($value);
	/**
	 */
	public function get_RelativeOffsetAdjustment();
	/**
	 * @param \System\Numerics\Vector3 $value
	 */
	public function SetRelativeOffsetAdjustment($value);
	/**
	 */
	public function get_RelativeSizeAdjustment();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetRelativeSizeAdjustment($value);
}
