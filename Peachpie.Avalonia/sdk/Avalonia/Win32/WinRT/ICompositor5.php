<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositor5
{
	/**
	 */
	public function get_Comment();
	/**
	 * @param \System\IntPtr $value
	 */
	public function SetComment($value);
	/**
	 */
	public function get_GlobalPlaybackRate();
	/**
	 * @param \System\Single $value
	 */
	public function SetGlobalPlaybackRate($value);
	/**
	 */
	public function CreateBounceScalarAnimation();
	/**
	 */
	public function CreateBounceVector2Animation();
	/**
	 */
	public function CreateBounceVector3Animation();
	/**
	 */
	public function CreateContainerShape();
	/**
	 */
	public function CreateEllipseGeometry();
	/**
	 */
	public function CreateLineGeometry();
	/**
	 */
	public function CreatePathGeometry();
	/**
	 * @param \System\Void* $path
	 */
	public function CreatePathGeometryWithPath($path);
	/**
	 */
	public function CreatePathKeyFrameAnimation();
	/**
	 */
	public function CreateRectangleGeometry();
	/**
	 */
	public function CreateRoundedRectangleGeometry();
	/**
	 */
	public function CreateShapeVisual();
	/**
	 */
	public function CreateSpriteShape();
	/**
	 * @param \System\Void* $geometry
	 */
	public function CreateSpriteShapeWithGeometry($geometry);
	/**
	 */
	public function CreateViewBox();
	/**
	 */
	public function RequestCommitAsync();
}
