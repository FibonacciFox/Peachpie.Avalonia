<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositorDrawingContextProxyOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IBitmapImpl $source
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawBitmap_1 ($source, $opacity, $sourceRect, $destRect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IBitmapImpl $source
	 * @param \Avalonia\Media\IBrush $opacityMask
	 * @param \Avalonia\Rect $opacityMaskRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawBitmap_2 ($source, $opacityMask, $opacityMaskRect, $destRect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_1 ($brush, $pen, $rect, $boxShadows){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IExperimentalAcrylicMaterial $material
	 * @param \Avalonia\RoundedRect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_2 ($material, $rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $clip
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function PushClip_1 ($clip){}
	/**
	 * @deprecated
	 * @param \Avalonia\RoundedRect $clip
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function PushClip_2 ($clip){}
}
class CompositorDrawingContextProxy extends \System\Object implements
	\Avalonia\Platform\IDrawingContextImpl,
	\System\IDisposable,
	\Avalonia\Platform\IDrawingContextWithAcrylicLikeSupport,
	\Avalonia\Platform\IDrawingContextImplWithEffects
{
	use CompositorDrawingContextProxyOverride;

	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $PostTransform;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\Media\RenderOptions
	 */
	public $RenderOptions;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	public function Clear($color){}
	/**
	 * @uses CompositorDrawingContextProxyOverride::DrawBitmap_1 <br>public , args: ($source, $opacity, $sourceRect, $destRect)<br>
	 * @uses CompositorDrawingContextProxyOverride::DrawBitmap_2 <br>public , args: ($source, $opacityMask, $opacityMaskRect, $destRect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawBitmap (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public function DrawLine($pen, $p1, $p2){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	public function DrawGeometry($brush, $pen, $geometry){}
	/**
	 * @uses CompositorDrawingContextProxyOverride::DrawRectangle_1 <br>public , args: ($brush, $pen, $rect, $boxShadows)<br>
	 * @uses CompositorDrawingContextProxyOverride::DrawRectangle_2 <br>public , args: ($material, $rect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawRectangle (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function DrawEllipse($brush, $pen, $rect){}
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Platform\IGlyphRunImpl $glyphRun
	 * @return \System\Void|void
	 */
	public function DrawGlyphRun($foreground, $glyphRun){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Platform\IDrawingContextLayerImpl
	 */
	public function CreateLayer($size){}
	/**
	 * @uses CompositorDrawingContextProxyOverride::PushClip_1 <br>public , args: ($clip)<br>
	 * @uses CompositorDrawingContextProxyOverride::PushClip_2 <br>public , args: ($clip)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function PushClip (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function PopClip(){}
	/**
	 * @param \System\Double|double $opacity
	 * @param \System\Nullable_1 $bounds [generic: Avalonia\Rect]
	 * @return \System\Void|void
	 */
	public function PushOpacity($opacity, $bounds){}
	/**
	 * @return \System\Void|void
	 */
	public function PopOpacity(){}
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	public function PushOpacityMask($mask, $bounds){}
	/**
	 * @param \Avalonia\Media\RenderOptions $renderOptions
	 * @return \System\Void|void
	 */
	public function PushRenderOptions($renderOptions){}
	/**
	 * @return \System\Void|void
	 */
	public function PopOpacityMask(){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $clip
	 * @return \System\Void|void
	 */
	public function PushGeometryClip($clip){}
	/**
	 * @return \System\Void|void
	 */
	public function PopGeometryClip(){}
	/**
	 * @return \System\Void|void
	 */
	public function PopRenderOptions(){}
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public function GetFeature($t){}
	/**
	 * @param \Avalonia\Media\IEffect $effect
	 * @return \System\Void|void
	 */
	public function PushEffect($effect){}
	/**
	 * @return \System\Void|void
	 */
	public function PopEffect(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $impl
	 */
	public function __construct($impl){}
}