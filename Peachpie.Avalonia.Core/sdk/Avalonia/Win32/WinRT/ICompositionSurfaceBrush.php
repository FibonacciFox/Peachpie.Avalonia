<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionSurfaceBrush
{
	/**
	 */
	public function get_BitmapInterpolationMode();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBitmapInterpolationMode $value
	 */
	public function SetBitmapInterpolationMode($value);
	/**
	 */
	public function get_HorizontalAlignmentRatio();
	/**
	 * @param \System\Single $value
	 */
	public function SetHorizontalAlignmentRatio($value);
	/**
	 */
	public function get_Stretch();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionStretch $value
	 */
	public function SetStretch($value);
	/**
	 */
	public function get_Surface();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionSurface $value
	 */
	public function SetSurface($value);
	/**
	 */
	public function get_VerticalAlignmentRatio();
	/**
	 * @param \System\Single $value
	 */
	public function SetVerticalAlignmentRatio($value);
}
