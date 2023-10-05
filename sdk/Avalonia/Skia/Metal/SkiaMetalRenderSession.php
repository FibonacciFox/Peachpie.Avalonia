<?php
namespace Avalonia\Skia\Metal;
/**
 */
class SkiaMetalRenderSession extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpuRenderSession,
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\GRContext
	 * @property
	 */
	public readonly $GrContext;
	/**
	 * @var \SkiaSharp\SKSurface
	 * @property
	 */
	public readonly $SkSurface;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ScaleFactor;
	/**
	 * @var \SkiaSharp\GRSurfaceOrigin
	 * @property
	 */
	public readonly $SurfaceOrigin;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \SkiaSharp\GRContext
	 */
	public  function get_GrContext(){}
	/**
	 * @return \SkiaSharp\SKSurface
	 */
	public  function get_SkSurface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ScaleFactor(){}
	/**
	 * @return \SkiaSharp\GRSurfaceOrigin
	 */
	public  function get_SurfaceOrigin(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
