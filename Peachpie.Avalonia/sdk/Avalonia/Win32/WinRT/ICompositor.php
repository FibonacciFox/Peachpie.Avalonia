<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositor
{
	/**
	 */
	public function CreateColorKeyFrameAnimation();
	/**
	 */
	public function CreateColorBrush();
	/**
	 * @param \Avalonia\Win32\WinRT\WinRTColor* $color
	 */
	public function CreateColorBrushWithColor($color);
	/**
	 */
	public function CreateContainerVisual();
	/**
	 * @param \System\Numerics\Vector2 $controlPoint1
	 * @param \System\Numerics\Vector2 $controlPoint2
	 */
	public function CreateCubicBezierEasingFunction($controlPoint1, $controlPoint2);
	/**
	 * @param \Avalonia\Win32\WinRT\IGraphicsEffect $graphicsEffect
	 */
	public function CreateEffectFactory($graphicsEffect);
	/**
	 * @param \System\Void* $graphicsEffect
	 * @param \System\Void* $animatableProperties
	 */
	public function CreateEffectFactoryWithProperties($graphicsEffect, $animatableProperties);
	/**
	 */
	public function CreateExpressionAnimation();
	/**
	 * @param \System\IntPtr $expression
	 */
	public function CreateExpressionAnimationWithExpression($expression);
	/**
	 */
	public function CreateInsetClip();
	/**
	 * @param \System\Single $leftInset
	 * @param \System\Single $topInset
	 * @param \System\Single $rightInset
	 * @param \System\Single $bottomInset
	 */
	public function CreateInsetClipWithInsets($leftInset, $topInset, $rightInset, $bottomInset);
	/**
	 */
	public function CreateLinearEasingFunction();
	/**
	 */
	public function CreatePropertySet();
	/**
	 */
	public function CreateQuaternionKeyFrameAnimation();
	/**
	 */
	public function CreateScalarKeyFrameAnimation();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 */
	public function CreateScopedBatch($batchType);
	/**
	 */
	public function CreateSpriteVisual();
	/**
	 */
	public function CreateSurfaceBrush();
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionSurface $surface
	 */
	public function CreateSurfaceBrushWithSurface($surface);
	/**
	 */
	public function CreateTargetForCurrentView();
	/**
	 */
	public function CreateVector2KeyFrameAnimation();
	/**
	 */
	public function CreateVector3KeyFrameAnimation();
	/**
	 */
	public function CreateVector4KeyFrameAnimation();
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 */
	public function GetCommitBatch($batchType);
}
