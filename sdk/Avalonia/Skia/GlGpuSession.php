<?php
namespace Avalonia\Skia;
/**
 */
class GlGpuSession extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpuRenderSession,
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\GRSurfaceOrigin
	 * @property
	 */
	public readonly $SurfaceOrigin;
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
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \SkiaSharp\GRSurfaceOrigin
	 */
	public  function get_SurfaceOrigin(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
