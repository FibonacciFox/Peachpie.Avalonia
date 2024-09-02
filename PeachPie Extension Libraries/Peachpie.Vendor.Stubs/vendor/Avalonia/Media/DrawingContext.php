<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DrawingContextOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IImage $source
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawImage_1 ($source, $rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IImage $source
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawImage_2 ($source, $sourceRect, $destRect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Media\Geometry $geometry
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawGeometry_1 ($brush, $pen, $geometry){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawGeometry_2 ($brush, $pen, $geometry){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rrect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_2 ($brush, $pen, $rrect, $boxShadows){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_3 ($pen, $rect, $cornerRadius){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $center
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawEllipse_1 ($brush, $pen, $center, $radiusX, $radiusY){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawEllipse_2 ($brush, $pen, $rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\RoundedRect $clip
	 * @return \Avalonia\Media\DrawingContext
	 */
	#[MethodOverride]public function PushClip_1 ($clip){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $clip
	 * @return \Avalonia\Media\DrawingContext
	 */
	#[MethodOverride]public function PushClip_2 ($clip){}
	/**
	 * @deprecated
	 * @param \Avalonia\RoundedRect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function PushClipCore_1 ($rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function PushClipCore_2 ($rect){}
}
class DrawingContext extends \System\Object implements
	\System\IDisposable
{
	use DrawingContextOverride;

	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function DisposeCore();
	/**
	 * @uses DrawingContextOverride::DrawImage_1 <br>public , args: ($source, $rect)<br>
	 * @uses DrawingContextOverride::DrawImage_2 <br>public , args: ($source, $sourceRect, $destRect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawImage (\override ...$args){}
	/**
	 * @param \Avalonia\Utilities\IRef_1 $source [generic: Avalonia\Platform\IBitmapImpl]
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	abstract protected function DrawBitmap($source, $opacity, $sourceRect, $destRect);
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public function DrawLine($pen, $p1, $p2){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	abstract protected function DrawLineCore($pen, $p1, $p2);
	/**
	 * @uses DrawingContextOverride::DrawGeometry_1 <br>public , args: ($brush, $pen, $geometry)<br>
	 * @uses DrawingContextOverride::DrawGeometry_2 <br>public , args: ($brush, $pen, $geometry)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawGeometry (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	abstract protected function DrawGeometryCore($brush, $pen, $geometry);
	/**
	 * @uses DrawingContextOverride::DrawRectangle_1 <br>public , args: ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)<br>
	 * @uses DrawingContextOverride::DrawRectangle_2 <br>public , args: ($brush, $pen, $rrect, $boxShadows)<br>
	 * @uses DrawingContextOverride::DrawRectangle_3 <br>public , args: ($pen, $rect, $cornerRadius)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawRectangle (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rrect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	abstract protected function DrawRectangleCore($brush, $pen, $rrect, $boxShadows);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	public function FillRectangle($brush, $rect, $cornerRadius){}
	/**
	 * @uses DrawingContextOverride::DrawEllipse_1 <br>public , args: ($brush, $pen, $center, $radiusX, $radiusY)<br>
	 * @uses DrawingContextOverride::DrawEllipse_2 <br>public , args: ($brush, $pen, $rect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawEllipse (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	abstract protected function DrawEllipseCore($brush, $pen, $rect);
	/**
	 * @param \Avalonia\Rendering\SceneGraph\ICustomDrawOperation $custom
	 * @return \System\Void|void
	 */
	abstract public function Custom($custom);
	/**
	 * @param \Avalonia\Media\FormattedText $text
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	public function DrawText($text, $origin){}
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @return \System\Void|void
	 */
	abstract public function DrawGlyphRun($foreground, $glyphRun);
	/**
	 * @uses DrawingContextOverride::PushClip_1 <br>public , args: ($clip)<br>
	 * @uses DrawingContextOverride::PushClip_2 <br>public , args: ($clip)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\DrawingContext|mixed|\override
	 */
	#[MethodOverridePublic]function PushClip (\override ...$args){}
	/**
	 * @uses DrawingContextOverride::PushClipCore_1 <br>protected , args: ($rect)<br>
	 * @uses DrawingContextOverride::PushClipCore_2 <br>protected , args: ($rect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function PushClipCore (\override ...$args){}
	/**
	 * @param \Avalonia\Media\Geometry $clip
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushGeometryClip($clip){}
	/**
	 * @param \Avalonia\Media\Geometry $clip
	 * @return \System\Void|void
	 */
	abstract protected function PushGeometryClipCore($clip);
	/**
	 * @param \System\Double|double $opacity
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushOpacity($opacity){}
	/**
	 * @param \System\Double|double $opacity
	 * @return \System\Void|void
	 */
	abstract protected function PushOpacityCore($opacity);
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushOpacityMask($mask, $bounds){}
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	abstract protected function PushOpacityMaskCore($mask, $bounds);
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushTransform($matrix){}
	/**
	 * @param \Avalonia\Media\RenderOptions $renderOptions
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushRenderOptions($renderOptions){}
	/**
	 * @param \Avalonia\Media\RenderOptions $renderOptions
	 * @return \System\Void|void
	 */
	abstract protected function PushRenderOptionsCore($renderOptions);
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushPreTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushPostTransform($matrix){}
	/**
	 * @return \Avalonia\Media\DrawingContext+PushedState
	 */
	public function PushTransformContainer(){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \System\Void|void
	 */
	abstract protected function PushTransformCore($matrix);
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopClipCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopGeometryClipCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopOpacityCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopOpacityMaskCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopTransformCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function PopRenderOptionsCore();
	private static function PenIsVisible($pen){}
}