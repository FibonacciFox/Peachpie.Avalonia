<?php
namespace Avalonia\Platform;
interface IPlatformRenderInterface
{


	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function CreateEllipseGeometry($rect);
	/**
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function CreateLineGeometry($p1, $p2);
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function CreateRectangleGeometry($rect);
	/**
	 * @return \Avalonia\Platform\IStreamGeometryImpl
	 */
	public function CreateStreamGeometry();
	/**
	 * @param \Avalonia\Media\FillRule $fillRule
	 * @param \System\Collections\Generic\IReadOnlyList_1 $children [generic: Avalonia\Platform\IGeometryImpl]
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function CreateGeometryGroup($fillRule, $children);
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Platform\IGeometryImpl $g1
	 * @param \Avalonia\Platform\IGeometryImpl $g2
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function CreateCombinedGeometry($combineMode, $g1, $g2);
	/**
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function BuildGlyphRunGeometry($glyphRun);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\Platform\IRenderTargetBitmapImpl
	 */
	public function CreateRenderTargetBitmap($size, $dpi);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public function CreateWriteableBitmap($size, $dpi, $format, $alphaFormat);
	/**
	 * @param \System\String|string $fileName
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function LoadBitmap($fileName);
	/**
	 * @param \System\IO\Stream $stream
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function LoadBitmap($stream);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public function LoadWriteableBitmapToWidth($stream, $width, $interpolationMode);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public function LoadWriteableBitmapToHeight($stream, $height, $interpolationMode);
	/**
	 * @param \System\String|string $fileName
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public function LoadWriteableBitmap($fileName);
	/**
	 * @param \System\IO\Stream $stream
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public function LoadWriteableBitmap($stream);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function LoadBitmapToWidth($stream, $width, $interpolationMode);
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function LoadBitmapToHeight($stream, $height, $interpolationMode);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $bitmapImpl
	 * @param \Avalonia\PixelSize $destinationSize
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function ResizeBitmap($bitmapImpl, $destinationSize, $interpolationMode);
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @param \System\IntPtr $data
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \System\Int32|int $stride
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function LoadBitmap($format, $alphaFormat, $data, $size, $dpi, $stride);
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphInfos [generic: Avalonia\Media\TextFormatting\GlyphInfo]
	 * @param \Avalonia\Point $baselineOrigin
	 * @return \Avalonia\Platform\IGlyphRunImpl
	 */
	public function CreateGlyphRun($glyphTypeface, $fontRenderingEmSize, $glyphInfos, $baselineOrigin);
	/**
	 * @param \Avalonia\Platform\IPlatformGraphicsContext $graphicsApiContext
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceContext
	 */
	public function CreateBackendContext($graphicsApiContext);
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @return \System\Boolean|bool
	 */
	public function IsSupportedBitmapPixelFormat($format);
}