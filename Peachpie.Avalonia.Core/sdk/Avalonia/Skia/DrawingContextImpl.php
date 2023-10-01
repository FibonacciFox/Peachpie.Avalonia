<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DrawingContextImplMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBitmap_1($source, $opacity, $sourceRect, $destRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawBitmap_2($source, $opacityMask, $opacityMaskRect, $destRect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_1($material, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($brush, $pen, $rect, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushClip_1($clip){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushClip_2($clip){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] private static function Blend_1($leftColor, $leftAlpha, $rightColor, $rightAlpha){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] private static function Blend_2($left, $right){}
}
/**
 */
class DrawingContextImpl extends \System\Object implements 
	\Avalonia\Platform\IDrawingContextImpl,
	\System\IDisposable,
	\Avalonia\Platform\IDrawingContextWithAcrylicLikeSupport,
	\Avalonia\Platform\IDrawingContextImplWithEffects
{
	/**
	 * @return \SkiaSharp\GRContext
	 */
	public  function get_GrContext(){}
	/**
	 * @return \SkiaSharp\SKCanvas
	 */
	public  function get_Canvas(){}
	/**
	 * @return \SkiaSharp\SKSurface
	 */
	public  function get_Surface(){}
	/**
	 * @return \Avalonia\Media\RenderOptions
	 */
	public  function get_RenderOptions(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 * @return \System\Void|void
	 */
	public  function set_RenderOptions($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckLease(){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	public  function Clear($color){}
	/**
	 * @uses DrawingContextImplMethodsOverride::DrawBitmap_1 ($source, $opacity, $sourceRect, $destRect)
	 * @uses DrawingContextImplMethodsOverride::DrawBitmap_2 ($source, $opacityMask, $opacityMaskRect, $destRect)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawBitmap(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public  function DrawLine($pen, $p1, $p2){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	public  function DrawGeometry($brush, $pen, $geometry){}
	/**
	 * @param \System\Double|double $radius
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SkBlurRadiusToSigma($radius){}
	/**
	 * @param \SkiaSharp\SKRect $hole_rect
	 * @param \System\Single $shadow_blur
	 * @param \System\Single $shadow_spread
	 * @param \System\Single $offsetX
	 * @param \System\Single $offsetY
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AreaCastingShadowInHole($hole_rect, $shadow_blur, $shadow_spread, $offsetX, $offsetY){}
	/**
	 * @uses DrawingContextImplMethodsOverride::DrawRectangle_1 ($material, $rect)
	 * @uses DrawingContextImplMethodsOverride::DrawRectangle_2 ($brush, $pen, $rect, $boxShadows)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DrawRectangle(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function DrawEllipse($brush, $pen, $rect){}
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Platform\IGlyphRunImpl $glyphRun
	 * @return \System\Void|void
	 */
	public  function DrawGlyphRun($foreground, $glyphRun){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Platform\IDrawingContextLayerImpl
	 */
	public  function CreateLayer($size){}
	/**
	 * @uses DrawingContextImplMethodsOverride::PushClip_1 ($clip)
	 * @uses DrawingContextImplMethodsOverride::PushClip_2 ($clip)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushClip(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopClip(){}
	/**
	 * @param \System\Double|double $opacity
	 * @param \System\Nullable_1 $bounds
	 * @return \System\Void|void
	 */
	public  function PushOpacity($opacity, $bounds){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopOpacity(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $clip
	 * @return \System\Void|void
	 */
	public  function PushGeometryClip($clip){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopGeometryClip(){}
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	public  function PushOpacityMask($mask, $bounds){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopOpacityMask(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Transform(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public  function GetFeature($t){}
	/**
	 * @param \Avalonia\Skia\PaintWrapper& $paintWrapper
	 * @param \Avalonia\Size $targetSize
	 * @param \Avalonia\Media\IGradientBrush $gradientBrush
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConfigureGradientBrush($paintWrapper, $targetSize, $gradientBrush){}
	/**
	 * @param \Avalonia\Skia\PaintWrapper& $paintWrapper
	 * @param \Avalonia\Size $targetSize
	 * @param \Avalonia\Media\ITileBrush $tileBrush
	 * @param \Avalonia\Skia\IDrawableBitmapImpl $tileBrushImage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConfigureTileBrush($paintWrapper, $targetSize, $tileBrush, $tileBrushImage){}
	/**
	 * @param \Avalonia\Skia\PaintWrapper& $paintWrapper
	 * @param \Avalonia\Media\ISceneBrushContent $content
	 * @param \Avalonia\Size $targetSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConfigureSceneBrushContent($paintWrapper, $content, $targetSize){}
	/**
	 * @param \Avalonia\Skia\PaintWrapper& $paintWrapper
	 * @param \Avalonia\Media\ISceneBrushContent $content
	 * @param \Avalonia\Size $targetSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConfigureSceneBrushContentWithSurface($paintWrapper, $content, $targetSize){}
	/**
	 * @param \Avalonia\Skia\PaintWrapper& $paintWrapper
	 * @param \Avalonia\Media\ISceneBrushContent $content
	 * @param \Avalonia\Size $targetSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConfigureSceneBrushContentWithPicture($paintWrapper, $content, $targetSize){}
	/**
	 * @param \System\Double|double $opacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAlphaColorFilter($opacity){}
	/**
	 * @uses DrawingContextImplMethodsOverride::Blend_1 ($leftColor, $leftAlpha, $rightColor, $rightAlpha)
	 * @uses DrawingContextImplMethodsOverride::Blend_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Blend(mixed ...$args){}
	/**
	 * @param \SkiaSharp\SKPaint $paint
	 * @param \Avalonia\Media\IExperimentalAcrylicMaterial $material
	 * @return \Avalonia\Skia\PaintWrapper
	 */
	protected  function CreateAcrylicPaint($paint, $material){}
	/**
	 * @param \SkiaSharp\SKPaint $paint
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Size $targetSize
	 * @return \Avalonia\Skia\PaintWrapper
	 */
	protected  function CreatePaint($paint, $brush, $targetSize){}
	/**
	 * @param \SkiaSharp\SKPaint $paint
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Size $targetSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryCreatePaint($paint, $pen, $targetSize){}
	/**
	 * @param \Avalonia\Size $size
	 * @param \System\Boolean $isLayer
	 * @param \System\Nullable_1 $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateRenderTarget($size, $isLayer, $format){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \System\Void|void
	 */
	public  function PushEffect($effect){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopEffect(){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateEffect($effect){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
