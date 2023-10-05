<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmediateDrawingContextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBitmap_1($source, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBitmap_2($source, $sourceRect, $destRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_1($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($pen, $rect, $cornerRadius){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_1($clip){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_2($clip){}
}
/**
 */
class ImmediateDrawingContext extends \System\Object implements 
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @var \Avalonia\Platform\IDrawingContextImpl
	 * @property
	 */
	public readonly $PlatformImpl;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public $CurrentTransform;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_StateStackPool(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_TransformStackPool(){}
	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function get_PlatformImpl(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_CurrentTransform(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CurrentTransform($value){}
	/**
	 * @uses ImmediateDrawingContextMethodsOverride::DrawBitmap_1 ($source, $rect)
	 * @uses ImmediateDrawingContextMethodsOverride::DrawBitmap_2 ($source, $sourceRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawBitmap(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public  function DrawLine($pen, $p1, $p2){}
	/**
	 * @uses ImmediateDrawingContextMethodsOverride::DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)
	 * @uses ImmediateDrawingContextMethodsOverride::DrawRectangle_2 ($pen, $rect, $cornerRadius)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Point $center
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @return \System\Void|void
	 */
	public  function DrawEllipse($brush, $pen, $center, $radiusX, $radiusY){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $foreground
	 * @param \Avalonia\Media\IImmutableGlyphRunReference $glyphRun
	 * @return \System\Void|void
	 */
	public  function DrawGlyphRun($foreground, $glyphRun){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	public  function FillRectangle($brush, $rect, $cornerRadius){}
	/**
	 * @uses ImmediateDrawingContextMethodsOverride::PushClip_1 ($clip)
	 * @uses ImmediateDrawingContextMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
	/**
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushOpacity($opacity, $bounds){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushOpacityMask($mask, $bounds){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushPostTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushPreTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushSetTransform($matrix){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushTransformContainer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PenIsVisible($pen){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($type){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
