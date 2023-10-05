<?php
namespace Avalonia\Skia;
/**
 */
class PixelFormatConversionShim extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\SKSurface
	 * @property
	 */
	public readonly $Surface;
	/**
	 * @var \System\IDisposable
	 * @property
	 */
	public readonly $SurfaceCopyHandler;
	/**
	 * @return \SkiaSharp\SKSurface
	 */
	public  function get_Surface(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function get_SurfaceCopyHandler(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopySurface(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
