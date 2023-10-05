<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BitmapMethodsOverride
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
class Bitmap extends \System\Object implements 
	\Avalonia\Media\Imaging\IBitmap,
	\Avalonia\Media\IImage,
	\System\IDisposable,
	\Avalonia\Media\IImageBrushSource
{
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
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @property
	 */
	public readonly $Format;
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $width
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public static function DecodeToWidth($stream, $width, $interpolationMode){}
	/**
	 * @param \System\IO\Stream $stream
	 * @param \System\Int32|int $height
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public static function DecodeToHeight($stream, $height, $interpolationMode){}
	/**
	 * @param \Avalonia\PixelSize $destinationSize
	 * @param \Avalonia\Media\Imaging\BitmapInterpolationMode $interpolationMode
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public  function CreateScaledBitmap($destinationSize, $interpolationMode){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Dpi(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_PixelSize(){}
	/**
	 * @uses BitmapMethodsOverride::get_PlatformImpl_1 ()
	 * @uses BitmapMethodsOverride::get_PlatformImpl_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @uses BitmapMethodsOverride::Save_1 ($fileName, $quality)
	 * @uses BitmapMethodsOverride::Save_2 ($stream, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Format(){}
	/**
	 * @param \Avalonia\PixelRect $sourceRect
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $stride
	 * @param \Avalonia\Platform\ILockedFramebuffer $fb
	 * @return \System\Void|void
	 */
	protected  function CopyPixelsCore($sourceRect, $buffer, $bufferSize, $stride, $fb){}
	/**
	 * @param \Avalonia\PixelRect $sourceRect
	 * @param \System\IntPtr $buffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\Int32|int $stride
	 * @return \System\Void|void
	 */
	public  function CopyPixels($sourceRect, $buffer, $bufferSize, $stride){}
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
	#[MethodPrivate] static function GetFactory(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Bitmap(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
