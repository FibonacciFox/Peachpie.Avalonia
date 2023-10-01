<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DrawingContextMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_1($source, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawImage_2($source, $sourceRect, $destRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawGeometry_1($brush, $pen, $geometry){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawGeometry_2($brush, $pen, $geometry){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_1($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($brush, $pen, $rrect, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_3($pen, $rect, $cornerRadius){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_1($brush, $pen, $center, $radiusX, $radiusY){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawEllipse_2($brush, $pen, $rect){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_1($clip){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	#[MethodOverride] public  function PushClip_2($clip){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PushClipCore_1($rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PushClipCore_2($rect){}
}
/**
 */
class DrawingContext extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_StateStackPool(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DisposeCore(){}
	/**
	 * @uses DrawingContextMethodsOverride::DrawImage_1 ($source, $rect)
	 * @uses DrawingContextMethodsOverride::DrawImage_2 ($source, $sourceRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawImage(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\IRef_1 $source
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	protected  function DrawBitmap($source, $opacity, $sourceRect, $destRect){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public  function DrawLine($pen, $p1, $p2){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	protected  function DrawLineCore($pen, $p1, $p2){}
	/**
	 * @uses DrawingContextMethodsOverride::DrawGeometry_1 ($brush, $pen, $geometry)
	 * @uses DrawingContextMethodsOverride::DrawGeometry_2 ($brush, $pen, $geometry)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawGeometry(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	protected  function DrawGeometryCore($brush, $pen, $geometry){}
	/**
	 * @uses DrawingContextMethodsOverride::DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)
	 * @uses DrawingContextMethodsOverride::DrawRectangle_2 ($brush, $pen, $rrect, $boxShadows)
	 * @uses DrawingContextMethodsOverride::DrawRectangle_3 ($pen, $rect, $cornerRadius)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rrect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	protected  function DrawRectangleCore($brush, $pen, $rrect, $boxShadows){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	public  function FillRectangle($brush, $rect, $cornerRadius){}
	/**
	 * @uses DrawingContextMethodsOverride::DrawEllipse_1 ($brush, $pen, $center, $radiusX, $radiusY)
	 * @uses DrawingContextMethodsOverride::DrawEllipse_2 ($brush, $pen, $rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawEllipse(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	protected  function DrawEllipseCore($brush, $pen, $rect){}
	/**
	 * @param \Avalonia\Rendering\SceneGraph\ICustomDrawOperation $custom
	 * @return \System\Void|void
	 */
	public  function Custom($custom){}
	/**
	 * @param \Avalonia\Media\FormattedText $text
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	public  function DrawText($text, $origin){}
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @return \System\Void|void
	 */
	public  function DrawGlyphRun($foreground, $glyphRun){}
	/**
	 * @uses DrawingContextMethodsOverride::PushClip_1 ($clip)
	 * @uses DrawingContextMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
	/**
	 * @uses DrawingContextMethodsOverride::PushClipCore_1 ($rect)
	 * @uses DrawingContextMethodsOverride::PushClipCore_2 ($rect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClipCore(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Geometry $clip
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushGeometryClip($clip){}
	/**
	 * @param \Avalonia\Media\Geometry $clip
	 * @return \System\Void|void
	 */
	protected  function PushGeometryClipCore($clip){}
	/**
	 * @param \System\Double|double $opacity
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushOpacity($opacity){}
	/**
	 * @param \System\Double|double $opacity
	 * @return \System\Void|void
	 */
	protected  function PushOpacityCore($opacity){}
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushOpacityMask($mask, $bounds){}
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	protected  function PushOpacityMaskCore($mask, $bounds){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushPreTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushPostTransform($matrix){}
	/**
	 * @return \Avalonia\Media\PushedState
	 */
	public  function PushTransformContainer(){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \System\Void|void
	 */
	protected  function PushTransformCore($matrix){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PopClipCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PopGeometryClipCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PopOpacityCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PopOpacityMaskCore(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PopTransformCore(){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PenIsVisible($pen){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
