<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface IVisual
{
	/**
	 */
	public function get_AnchorPoint();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetAnchorPoint($value);
	/**
	 */
	public function get_BackfaceVisibility();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBackfaceVisibility $value
	 */
	public function SetBackfaceVisibility($value);
	/**
	 */
	public function get_BorderMode();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBorderMode $value
	 */
	public function SetBorderMode($value);
	/**
	 */
	public function get_CenterPoint();
	/**
	 * @param \System\Numerics\Vector3 $value
	 */
	public function SetCenterPoint($value);
	/**
	 */
	public function get_Clip();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionClip $value
	 */
	public function SetClip($value);
	/**
	 */
	public function get_CompositeMode();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionCompositeMode $value
	 */
	public function SetCompositeMode($value);
	/**
	 */
	public function get_IsVisible();
	/**
	 * @param \System\Int32|int $value
	 */
	public function SetIsVisible($value);
	/**
	 */
	public function get_Offset();
	/**
	 * @param \System\Numerics\Vector3 $value
	 */
	public function SetOffset($value);
	/**
	 */
	public function get_Opacity();
	/**
	 * @param \System\Single $value
	 */
	public function SetOpacity($value);
	/**
	 */
	public function get_Orientation();
	/**
	 * @param \System\Numerics\Quaternion $value
	 */
	public function SetOrientation($value);
	/**
	 */
	public function get_Parent();
	/**
	 */
	public function get_RotationAngle();
	/**
	 * @param \System\Single $value
	 */
	public function SetRotationAngle($value);
	/**
	 */
	public function get_RotationAngleInDegrees();
	/**
	 * @param \System\Single $value
	 */
	public function SetRotationAngleInDegrees($value);
	/**
	 */
	public function get_RotationAxis();
	/**
	 * @param \System\Numerics\Vector3 $value
	 */
	public function SetRotationAxis($value);
	/**
	 */
	public function get_Scale();
	/**
	 * @param \System\Numerics\Vector3 $value
	 */
	public function SetScale($value);
	/**
	 */
	public function get_Size();
	/**
	 * @param \System\Numerics\Vector2 $value
	 */
	public function SetSize($value);
	/**
	 */
	public function get_TransformMatrix();
	/**
	 * @param \System\Numerics\Matrix4x4 $value
	 */
	public function SetTransformMatrix($value);
}
