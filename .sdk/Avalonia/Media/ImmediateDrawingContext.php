<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmediateDrawingContextOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Imaging\Bitmap $source
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawBitmap_1 ($source, $rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Imaging\Bitmap $source
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawBitmap_2 ($source, $sourceRect, $destRect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_1 ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function DrawRectangle_2 ($pen, $rect, $cornerRadius){}
	/**
	 * @deprecated
	 * @param \Avalonia\RoundedRect $clip
	 * @return \Avalonia\Media\ImmediateDrawingContext
	 */
	#[MethodOverride]public function PushClip_1 ($clip){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $clip
	 * @return \Avalonia\Media\ImmediateDrawingContext
	 */
	#[MethodOverride]public function PushClip_2 ($clip){}
}
final class ImmediateDrawingContext extends \System\Object implements
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	use ImmediateDrawingContextOverride;
	/**
	 * @property
	 * @var \Avalonia\Platform\IDrawingContextImpl
	 * @since readonly
	 */
	public $PlatformImpl;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $CurrentTransform;
	/**
	 * @uses ImmediateDrawingContextOverride::DrawBitmap_1 <br>public , args: ($source, $rect)<br>
	 * @uses ImmediateDrawingContextOverride::DrawBitmap_2 <br>public , args: ($source, $sourceRect, $destRect)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawBitmap (\override ...$args){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public function DrawLine($pen, $p1, $p2){}
	/**
	 * @uses ImmediateDrawingContextOverride::DrawRectangle_1 <br>public , args: ($brush, $pen, $rect, $radiusX, $radiusY, $boxShadows)<br>
	 * @uses ImmediateDrawingContextOverride::DrawRectangle_2 <br>public , args: ($pen, $rect, $cornerRadius)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DrawRectangle (\override ...$args){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \Avalonia\Media\Immutable\ImmutablePen $pen
	 * @param \Avalonia\Point $center
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @return \System\Void|void
	 */
	public function DrawEllipse($brush, $pen, $center, $radiusX, $radiusY){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $foreground
	 * @param \Avalonia\Media\IImmutableGlyphRunReference $glyphRun
	 * @return \System\Void|void
	 */
	public function DrawGlyphRun($foreground, $glyphRun){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \Avalonia\Rect $rect
	 * @param \System\Single $cornerRadius
	 * @return \System\Void|void
	 */
	public function FillRectangle($brush, $rect, $cornerRadius){}
	/**
	 * @uses ImmediateDrawingContextOverride::PushClip_1 <br>public , args: ($clip)<br>
	 * @uses ImmediateDrawingContextOverride::PushClip_2 <br>public , args: ($clip)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\ImmediateDrawingContext|mixed|\override
	 */
	#[MethodOverridePublic]function PushClip (\override ...$args){}
	/**
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushOpacity($opacity, $bounds){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushOpacityMask($mask, $bounds){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushPostTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushPreTransform($matrix){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushSetTransform($matrix){}
	/**
	 * @return \Avalonia\Media\ImmediateDrawingContext+PushedState
	 */
	public function PushTransformContainer(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private static function PenIsVisible($pen){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public function TryGetFeature($type){}
}