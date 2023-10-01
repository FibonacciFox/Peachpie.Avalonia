<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformRenderInterface
{
	/**
	 * @param \Avalonia\Rect $rect
	 */
	public function CreateEllipseGeometry($rect);
	/**
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 */
	public function CreateLineGeometry($p1, $p2);
	/**
	 * @param \Avalonia\Rect $rect
	 */
	public function CreateRectangleGeometry($rect);
	/**
	 */
	public function CreateStreamGeometry();
	/**
	 * @param \Avalonia\Media\FillRule $fillRule
	 * @param \System\Collections\Generic\IReadOnlyList_1 $children
	 */
	public function CreateGeometryGroup($fillRule, $children);
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Platform\IGeometryImpl $g1
	 * @param \Avalonia\Platform\IGeometryImpl $g2
	 */
	public function CreateCombinedGeometry($combineMode, $g1, $g2);
	/**
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 */
	public function BuildGlyphRunGeometry($glyphRun);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 */
	public function CreateRenderTargetBitmap($size, $dpi);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 */
	public function CreateWriteableBitmap($size, $dpi, $format, $alphaFormat);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 */
	public function LoadWriteableBitmapToWidth($stream, $width, $interpolationMode);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 */
	public function LoadWriteableBitmapToHeight($stream, $height, $interpolationMode);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 */
	public function LoadBitmapToWidth($stream, $width, $interpolationMode);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 */
	public function LoadBitmapToHeight($stream, $height, $interpolationMode);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $bitmapImpl
	 * @param \Avalonia\PixelSize $destinationSize
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 */
	public function ResizeBitmap($bitmapImpl, $destinationSize, $interpolationMode);
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphInfos
	 * @param \Avalonia\Point $baselineOrigin
	 */
	public function CreateGlyphRun($glyphTypeface, $fontRenderingEmSize, $glyphInfos, $baselineOrigin);
	/**
	 * @param \Avalonia\Platform\IPlatformGraphicsContext $graphicsApiContext
	 */
	public function CreateBackendContext($graphicsApiContext);
	/**
	 */
	public function get_SupportsIndividualRoundRects();
	/**
	 */
	public function get_DefaultAlphaFormat();
	/**
	 */
	public function get_DefaultPixelFormat();
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 */
	public function IsSupportedBitmapPixelFormat($format);
}
