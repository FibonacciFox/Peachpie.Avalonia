<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformRenderInterfaceMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	#[MethodOverride] public  function LoadBitmap_1($fileName){}
	/**
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	#[MethodOverride] public  function LoadBitmap_2($stream){}
	/**
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	#[MethodOverride] public  function LoadBitmap_3($format, $alphaFormat, $data, $size, $dpi, $stride){}
	/**
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	#[MethodOverride] public  function LoadWriteableBitmap_1($fileName){}
	/**
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	#[MethodOverride] public  function LoadWriteableBitmap_2($stream){}
}
/**
 */
class PlatformRenderInterface extends \System\Object implements 
	\Avalonia\Platform\IPlatformRenderInterface
{
	/**
	 * @param \Avalonia\Platform\IPlatformGraphicsContext $graphicsContext
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceContext
	 */
	public  function CreateBackendContext($graphicsContext){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsIndividualRoundRects(){}
	/**
	 * @return \Avalonia\Platform\AlphaFormat
	 */
	public  function get_DefaultAlphaFormat(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public  function get_DefaultPixelFormat(){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @return \System\Boolean
	 */
	public  function IsSupportedBitmapPixelFormat($format){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function CreateEllipseGeometry($rect){}
	/**
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function CreateLineGeometry($p1, $p2){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function CreateRectangleGeometry($rect){}
	/**
	 * @return \Avalonia\Platform\IStreamGeometryImpl
	 */
	public  function CreateStreamGeometry(){}
	/**
	 * @param \Avalonia\Media\FillRule $fillRule
	 * @param \System\Collections\Generic\IReadOnlyList_1 $children
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function CreateGeometryGroup($fillRule, $children){}
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Platform\IGeometryImpl $g1
	 * @param \Avalonia\Platform\IGeometryImpl $g2
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function CreateCombinedGeometry($combineMode, $g1, $g2){}
	/**
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function BuildGlyphRunGeometry($glyphRun){}
	/**
	 * @uses PlatformRenderInterfaceMethodsOverride::LoadBitmap_1 ($fileName)
	 * @uses PlatformRenderInterfaceMethodsOverride::LoadBitmap_2 ($stream)
	 * @uses PlatformRenderInterfaceMethodsOverride::LoadBitmap_3 ($format, $alphaFormat, $data, $size, $dpi, $stride)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadBitmap(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public  function LoadWriteableBitmapToWidth($stream, $width, $interpolationMode){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public  function LoadWriteableBitmapToHeight($stream, $height, $interpolationMode){}
	/**
	 * @uses PlatformRenderInterfaceMethodsOverride::LoadWriteableBitmap_1 ($fileName)
	 * @uses PlatformRenderInterfaceMethodsOverride::LoadWriteableBitmap_2 ($stream)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadWriteableBitmap(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function LoadBitmapToWidth($stream, $width, $interpolationMode){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function LoadBitmapToHeight($stream, $height, $interpolationMode){}
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $bitmapImpl
	 * @param \Avalonia\PixelSize $destinationSize
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function ResizeBitmap($bitmapImpl, $destinationSize, $interpolationMode){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\Platform\IRenderTargetBitmapImpl
	 */
	public  function CreateRenderTargetBitmap($size, $dpi){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @param \Avalonia\Platform\AlphaFormat $alphaFormat
	 * @return \Avalonia\Platform\IWriteableBitmapImpl
	 */
	public  function CreateWriteableBitmap($size, $dpi, $format, $alphaFormat){}
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphInfos
	 * @param \Avalonia\Point $baselineOrigin
	 * @return \Avalonia\Platform\IGlyphRunImpl
	 */
	public  function CreateGlyphRun($glyphTypeface, $fontRenderingEmSize, $glyphInfos, $baselineOrigin){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
