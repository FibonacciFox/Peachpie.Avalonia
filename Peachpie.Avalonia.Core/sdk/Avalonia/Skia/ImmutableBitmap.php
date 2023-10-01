<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableBitmapMethodsOverride
{
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
class ImmutableBitmap extends \System\Object implements 
	\Avalonia\Skia\IDrawableBitmapImpl,
	\Avalonia\Platform\IBitmapImpl,
	\System\IDisposable,
	\Avalonia\Platform\IReadableBitmapImpl
{
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
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses ImmutableBitmapMethodsOverride::Save_1 ($fileName, $quality)
	 * @uses ImmutableBitmapMethodsOverride::Save_2 ($stream, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @param \Avalonia\Skia\DrawingContextImpl $context
	 * @param \SkiaSharp\SKRect $sourceRect
	 * @param \SkiaSharp\SKRect $destRect
	 * @param \SkiaSharp\SKPaint $paint
	 * @return \System\Void|void
	 */
	public  function Draw($context, $sourceRect, $destRect, $paint){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Format(){}
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
