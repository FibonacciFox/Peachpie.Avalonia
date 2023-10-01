<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositorProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComICompositorProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositor
{
	/**
	 * @return \System\Void*
	 */
	public  function CreateColorKeyFrameAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateColorBrush(){}
	/**
	 * @param \Avalonia\Win32\WinRT\WinRTColor* $color
	 * @return \Avalonia\Win32\WinRT\ICompositionColorBrush
	 */
	public  function CreateColorBrushWithColor($color){}
	/**
	 * @return \Avalonia\Win32\WinRT\IContainerVisual
	 */
	public  function CreateContainerVisual(){}
	/**
	 * @param \System\Numerics\Vector2 $controlPoint1
	 * @param \System\Numerics\Vector2 $controlPoint2
	 * @return \System\Void*
	 */
	public  function CreateCubicBezierEasingFunction($controlPoint1, $controlPoint2){}
	/**
	 * @param \Avalonia\Win32\WinRT\IGraphicsEffect $graphicsEffect
	 * @return \Avalonia\Win32\WinRT\ICompositionEffectFactory
	 */
	public  function CreateEffectFactory($graphicsEffect){}
	/**
	 * @param \System\Void* $graphicsEffect
	 * @param \System\Void* $animatableProperties
	 * @return \System\Void*
	 */
	public  function CreateEffectFactoryWithProperties($graphicsEffect, $animatableProperties){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateExpressionAnimation(){}
	/**
	 * @param \System\IntPtr $expression
	 * @return \System\Void*
	 */
	public  function CreateExpressionAnimationWithExpression($expression){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateInsetClip(){}
	/**
	 * @param \System\Single $leftInset
	 * @param \System\Single $topInset
	 * @param \System\Single $rightInset
	 * @param \System\Single $bottomInset
	 * @return \System\Void*
	 */
	public  function CreateInsetClipWithInsets($leftInset, $topInset, $rightInset, $bottomInset){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateLinearEasingFunction(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreatePropertySet(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateQuaternionKeyFrameAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateScalarKeyFrameAnimation(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 * @return \Avalonia\Win32\WinRT\ICompositionScopedBatch
	 */
	public  function CreateScopedBatch($batchType){}
	/**
	 * @return \Avalonia\Win32\WinRT\ISpriteVisual
	 */
	public  function CreateSpriteVisual(){}
	/**
	 * @return \Avalonia\Win32\WinRT\ICompositionSurfaceBrush
	 */
	public  function CreateSurfaceBrush(){}
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositionSurface $surface
	 * @return \Avalonia\Win32\WinRT\ICompositionSurfaceBrush
	 */
	public  function CreateSurfaceBrushWithSurface($surface){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateTargetForCurrentView(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateVector2KeyFrameAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateVector3KeyFrameAnimation(){}
	/**
	 * @return \System\Void*
	 */
	public  function CreateVector4KeyFrameAnimation(){}
	/**
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 * @return \System\Void*
	 */
	public  function GetCommitBatch($batchType){}
	/**
	 * @uses __MicroComICompositorProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositorProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositorProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositorProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
