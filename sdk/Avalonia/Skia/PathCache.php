<?php
namespace Avalonia\Skia;
/**
 */
class PathCache extends \System\ValueType
{
	/**
	 * @var \System\Single
	 * @field
	 */
	public $Tolerance;
	/**
	 * @var \SkiaSharp\SKPath
	 * @property
	 */
	public $CachedStrokePath;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $CachedGeometryRenderBounds;
	/**
	 * @return \SkiaSharp\SKPath
	 */
	public  function get_CachedStrokePath(){}
	/**
	 * @param \SkiaSharp\SKPath $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CachedStrokePath($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_CachedGeometryRenderBounds(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CachedGeometryRenderBounds($value){}
	/**
	 * @param \System\Single $strokeWidth
	 * @return \System\Boolean
	 */
	public  function HasCacheFor($strokeWidth){}
	/**
	 * @param \SkiaSharp\SKPath $path
	 * @param \System\Single $strokeWidth
	 * @param \Avalonia\Rect $geometryRenderBounds
	 * @return \System\Void|void
	 */
	public  function Cache($path, $strokeWidth, $geometryRenderBounds){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invalidate(){}
}
