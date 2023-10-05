<?php
namespace Avalonia\Skia;
/**
 */
class SkiaSurfaceWrapper extends \System\Object implements 
	\Avalonia\Skia\ISkiaSurface,
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\SKSurface
	 * @property
	 */
	public readonly $Surface;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanBlit;
	/**
	 * @return \SkiaSharp\SKSurface
	 */
	public  function get_Surface(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanBlit(){}
	/**
	 * @param \SkiaSharp\SKCanvas $canvas
	 * @return \System\Void|void
	 */
	public  function Blit($canvas){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
