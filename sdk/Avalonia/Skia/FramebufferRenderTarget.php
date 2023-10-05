<?php
namespace Avalonia\Skia;
/**
 */
class FramebufferRenderTarget extends \System\Object implements 
	\Avalonia\Platform\IRenderTarget,
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCorrupted;
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
	 * @param \SkiaSharp\SKImageInfo $currentImageInfo
	 * @param \SkiaSharp\SKImageInfo $desiredImageInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AreImageInfosCompatible($currentImageInfo, $desiredImageInfo){}
	/**
	 * @param \SkiaSharp\SKImageInfo $desiredImageInfo
	 * @param \Avalonia\Platform\ILockedFramebuffer $framebuffer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateSurface($desiredImageInfo, $framebuffer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FreeSurface(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
