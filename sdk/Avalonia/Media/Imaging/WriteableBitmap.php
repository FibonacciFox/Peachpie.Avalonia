<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WriteableBitmapMethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride] protected  function get_PlatformImpl_1(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride] private  function get_PlatformImpl_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_1($fileName, $quality){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_2($stream, $quality){}
}
/**
 */
class WriteableBitmap extends \Avalonia\Media\Imaging\Bitmap implements 
	\Avalonia\Media\Imaging\IBitmap,
	\Avalonia\Media\IImage,
	\System\IDisposable,
	\Avalonia\Media\IImageBrushSource
{
	/**
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @property
	 */
	public readonly $Format;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $Dpi;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $PixelSize;
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \Avalonia\Media\Imaging\WriteableBitmap
	 */
	public static function Decode($stream){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\WriteableBitmap
	 */
	public static function DecodeToWidth($stream, $width, $interpolationMode){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\WriteableBitmap
	 */
	public static function DecodeToHeight($stream, $height, $interpolationMode){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector& $dpi
	 * @param \System\Nullable_1 $format
	 * @param \System\Nullable_1 $alphaFormat
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreatePlatformImpl($size, $dpi, $format, $alphaFormat){}
	/**
	 * @uses WriteableBitmapMethodsOverride::get_PlatformImpl_1 ()
	 * @uses WriteableBitmapMethodsOverride::get_PlatformImpl_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @uses WriteableBitmapMethodsOverride::Save_1 ($fileName, $quality)
	 * @uses WriteableBitmapMethodsOverride::Save_2 ($stream, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Draw($context, $sourceRect, $destRect){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Bitmap(){}
}
