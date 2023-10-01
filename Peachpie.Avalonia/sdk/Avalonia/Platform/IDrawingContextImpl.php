<?php
namespace Avalonia\Platform;
/**
 */
interface IDrawingContextImpl
{
	/**
	 */
	public function get_RenderOptions();
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 */
	public function set_RenderOptions($value);
	/**
	 */
	public function get_Transform();
	/**
	 * @param \Avalonia\Matrix $value
	 */
	public function set_Transform($value);
	/**
	 * @param \Avalonia\Media\Color $color
	 */
	public function Clear($color);
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 */
	public function DrawLine($pen, $p1, $p2);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 */
	public function DrawGeometry($brush, $pen, $geometry);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\RoundedRect $rect
	 * @param \Avalonia\Media\BoxShadows $boxShadows
	 */
	public function DrawRectangle($brush, $pen, $rect, $boxShadows);
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Rect $rect
	 */
	public function DrawEllipse($brush, $pen, $rect);
	/**
	 * @param \Avalonia\Media\IBrush $foreground
	 * @param \Avalonia\Platform\IGlyphRunImpl $glyphRun
	 */
	public function DrawGlyphRun($foreground, $glyphRun);
	/**
	 * @param \Avalonia\Size $size
	 */
	public function CreateLayer($size);
	/**
	 */
	public function PopClip();
	/**
	 * @param \System\Double|double $opacity
	 * @param \System\Nullable_1 $bounds
	 */
	public function PushOpacity($opacity, $bounds);
	/**
	 */
	public function PopOpacity();
	/**
	 * @param \Avalonia\Media\IBrush $mask
	 * @param \Avalonia\Rect $bounds
	 */
	public function PushOpacityMask($mask, $bounds);
	/**
	 */
	public function PopOpacityMask();
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $clip
	 */
	public function PushGeometryClip($clip);
	/**
	 */
	public function PopGeometryClip();
	/**
	 * @param \System\Type $t
	 */
	public function GetFeature($t);
}
