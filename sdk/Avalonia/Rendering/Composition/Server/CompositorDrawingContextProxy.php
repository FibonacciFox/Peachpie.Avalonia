<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositorDrawingContextProxyMethodsOverride
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
	#[MethodOverride] public  function DrawRectangle_1($brush, $pen, $rect, $boxShadows){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function DrawRectangle_2($material, $rect){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushClip_1($clip){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushClip_2($clip){}
}
/**
 */
class CompositorDrawingContextProxy extends \System\Object implements 
	\Avalonia\Platform\IDrawingContextImpl,
	\System\IDisposable,
	\Avalonia\Platform\IDrawingContextWithAcrylicLikeSupport,
	\Avalonia\Platform\IDrawingContextImplWithEffects
{
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_PostTransform(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_PostTransform($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
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
	 * @return \Avalonia\Media\RenderOptions
	 */
	public  function get_RenderOptions(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 * @return \System\Void|void
	 */
	public  function set_RenderOptions($value){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	public  function Clear($color){}
	/**
	 * @uses CompositorDrawingContextProxyMethodsOverride::DrawBitmap_1 ($source, $opacity, $sourceRect, $destRect)
	 * @uses CompositorDrawingContextProxyMethodsOverride::DrawBitmap_2 ($source, $opacityMask, $opacityMaskRect, $destRect)
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
	 * @uses CompositorDrawingContextProxyMethodsOverride::DrawRectangle_1 ($brush, $pen, $rect, $boxShadows)
	 * @uses CompositorDrawingContextProxyMethodsOverride::DrawRectangle_2 ($material, $rect)
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
	 * @uses CompositorDrawingContextProxyMethodsOverride::PushClip_1 ($clip)
	 * @uses CompositorDrawingContextProxyMethodsOverride::PushClip_2 ($clip)
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
	 * @param \Avalonia\Platform\IGeometryImpl $clip
	 * @return \System\Void|void
	 */
	public  function PushGeometryClip($clip){}
	/**
	 * @return \System\Void|void
	 */
	public  function PopGeometryClip(){}
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public  function GetFeature($t){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
