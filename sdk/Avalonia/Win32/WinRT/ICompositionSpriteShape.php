<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionSpriteShape
{
	/**
	 */
	public function get_FillBrush();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $value
	 */
	public function SetFillBrush($value);
	/**
	 */
	public function get_Geometry();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionGeometry $value
	 */
	public function SetGeometry($value);
	/**
	 */
	public function get_IsStrokeNonScaling();
	/**
	 * @param \System\Int32|int $value
	 */
	public function SetIsStrokeNonScaling($value);
	/**
	 */
	public function get_StrokeBrush();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionBrush $value
	 */
	public function SetStrokeBrush($value);
	/**
	 */
	public function GetStrokeDashArray();
	/**
	 */
	public function GetStrokeDashCap();
	/**
	 */
	public function SetStrokeDashCap();
	/**
	 */
	public function GetStrokeDashOffset();
	/**
	 */
	public function SetStrokeDashOffset();
	/**
	 */
	public function GetStrokeEndCap();
	/**
	 */
	public function SetStrokeEndCap();
	/**
	 */
	public function GetStrokeLineJoin();
	/**
	 */
	public function SetStrokeLineJoin();
	/**
	 */
	public function GetStrokeMiterLimit();
	/**
	 */
	public function SetStrokeMiterLimit();
	/**
	 */
	public function GetStrokeStartCap();
	/**
	 */
	public function SetStrokeStartCap();
	/**
	 */
	public function GetStrokeThickness();
	/**
	 */
	public function SetStrokeThickness();
}
