<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SurfaceRenderTargetMethodsOverride
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
class SurfaceRenderTarget extends \System\Object implements 
	\Avalonia\Platform\IDrawingContextLayerImpl,
	\Avalonia\Platform\IRenderTargetBitmapImpl,
	\Avalonia\Platform\IBitmapImpl,
	\System\IDisposable,
	\Avalonia\Platform\IRenderTarget,
	\Avalonia\Skia\IDrawableBitmapImpl
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCorrupted;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanBlit;
	/**
	 * @param \SkiaSharp\GRContext $gpu
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Nullable_1 $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateSurface($gpu, $width, $height, $format){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function CreateDrawingContext(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
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
	 * @uses SurfaceRenderTargetMethodsOverride::Save_1 ($fileName, $quality)
	 * @uses SurfaceRenderTargetMethodsOverride::Save_2 ($stream, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Save(mixed ...$args){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $contextImpl
	 * @return \System\Void|void
	 */
	public  function Blit($contextImpl){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanBlit(){}
	/**
	 * @param \Avalonia\Skia\DrawingContextImpl $context
	 * @param \SkiaSharp\SKRect $sourceRect
	 * @param \SkiaSharp\SKRect $destRect
	 * @param \SkiaSharp\SKPaint $paint
	 * @return \System\Void|void
	 */
	public  function Draw($context, $sourceRect, $destRect, $paint){}
	/**
	 * @return \SkiaSharp\SKImage
	 */
	public  function SnapshotImage(){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Nullable_1 $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MakeImageInfo($width, $height, $format){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
