<?php
namespace Avalonia\Platform;
interface IDrawingContextImpl
{


	/**
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	public function Clear($color);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $source
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	public function DrawBitmap($source, $opacity, $sourceRect, $destRect);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $source
	 * @param \Avalonia\Media\IBrush $opacityMask
	 * @param \Avalonia\Rect $opacityMaskRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	public function DrawBitmap($source, $opacityMask, $opacityMaskRect, $destRect);
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \System\Void|void
	 */
	public function DrawLine($pen, $p1, $p2);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \System\Void|void
	 */
	public function DrawGeometry($brush, $pen, $geometry);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 * @return \System\Void|void
	 */
	public function DrawRectangle($brush, $pen, $rect, $boxShadows);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function DrawEllipse($brush, $pen, $rect);
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Platform\IGlyphRunImpl $glyphRun
	 * @return \System\Void|void
	 */
	public function DrawGlyphRun($foreground, $glyphRun);
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Platform\IDrawingContextLayerImpl
	 */
	public function CreateLayer($size);
	/**
	 * @param \Avalonia\Rect $clip
	 * @return \System\Void|void
	 */
	public function PushClip($clip);
	/**
	 * @param \Avalonia\RoundedRect $clip
	 * @return \System\Void|void
	 */
	public function PushClip($clip);
	/**
	 * @return \System\Void|void
	 */
	public function PopClip();
	/**
	 * @param \System\Double|double $opacity
	 * @param \System\Nullable_1 $bounds [generic: Avalonia\Rect]
	 * @return \System\Void|void
	 */
	public function PushOpacity($opacity, $bounds);
	/**
	 * @return \System\Void|void
	 */
	public function PopOpacity();
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 * @return \System\Void|void
	 */
	public function PushOpacityMask($mask, $bounds);
	/**
	 * @return \System\Void|void
	 */
	public function PopOpacityMask();
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $clip
	 * @return \System\Void|void
	 */
	public function PushGeometryClip($clip);
	/**
	 * @return \System\Void|void
	 */
	public function PopGeometryClip();
	/**
	 * @param \Avalonia\Media\RenderOptions $renderOptions
	 * @return \System\Void|void
	 */
	public function PushRenderOptions($renderOptions);
	/**
	 * @return \System\Void|void
	 */
	public function PopRenderOptions();
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public function GetFeature($t);
}