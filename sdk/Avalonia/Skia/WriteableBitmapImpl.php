<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WriteableBitmapImplMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_1($stream, $quality){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Save_2($fileName, $quality){}
}
/**
 */
class WriteableBitmapImpl extends \System\Object implements 
	\Avalonia\Platform\IWriteableBitmapImpl,
	\Avalonia\Platform\IBitmapImpl,
	\System\IDisposable,
	\Avalonia\Platform\IReadableBitmapImpl,
	\Avalonia\Skia\IDrawableBitmapImpl
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $Dpi;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $PixelSize;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Version;
	/**
	 * @var \System\Nullable_1[Avalonia\Platform\PixelFormat]
	 * @property
	 */
	public readonly $Format;
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Dpi(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_PixelSize(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Version(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Version($value){}
	/**
	 * @param \Avalonia\Skia\DrawingContextImpl $context
	 * @param \SkiaSharp\SKRect $sourceRect
	 * @param \SkiaSharp\SKRect $destRect
	 * @param \SkiaSharp\SKPaint $paint
	 * @return \System\Void|void
	 */
	public  function Draw($context, $sourceRect, $destRect, $paint){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses WriteableBitmapImplMethodsOverride::Save_1 ($stream, $quality)
	 * @uses WriteableBitmapImplMethodsOverride::Save_2 ($fileName, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Format(){}
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @return \SkiaSharp\SKImage
	 */
	public  function GetSnapshot(){}
	/**
	 * @param \System\IntPtr $address
	 * @param \System\Object|object $ctx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReleaseProc($address, $ctx){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
