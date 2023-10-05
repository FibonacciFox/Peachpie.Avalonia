<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderTargetBitmapMethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride] protected  function get_PlatformImpl_1(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride] protected  function get_PlatformImpl_2(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	#[MethodOverride] private  function get_PlatformImpl_3(){}
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
class RenderTargetBitmap extends \Avalonia\Media\Imaging\Bitmap implements 
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
	 * @uses RenderTargetBitmapMethodsOverride::get_PlatformImpl_1 ()
	 * @uses RenderTargetBitmapMethodsOverride::get_PlatformImpl_2 ()
	 * @uses RenderTargetBitmapMethodsOverride::get_PlatformImpl_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public  function Render($visual){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Vector $dpi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateImpl($size, $dpi){}
	/**
	 * @return \Avalonia\Media\DrawingContext
	 */
	public  function CreateDrawingContext(){}
	/**
	 * @uses RenderTargetBitmapMethodsOverride::Save_1 ($fileName, $quality)
	 * @uses RenderTargetBitmapMethodsOverride::Save_2 ($stream, $quality)
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
