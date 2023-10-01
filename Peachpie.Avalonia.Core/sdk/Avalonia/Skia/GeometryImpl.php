<?php
namespace Avalonia\Skia;
/**
 */
class GeometryImpl extends \System\Object implements 
	\Avalonia\Platform\IGeometryImpl
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CachedPathMeasure(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ContourLength(){}
	/**
	 * @return \SkiaSharp\SKPath
	 */
	public  function get_StrokePath(){}
	/**
	 * @return \SkiaSharp\SKPath
	 */
	public  function get_FillPath(){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	public  function FillContains($point){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	public  function StrokeContains($pen, $point){}
	/**
	 * @param \System\Single $strokeWidth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdatePathCache($strokeWidth){}
	/**
	 * @param \SkiaSharp\SKPath $path
	 * @param \Avalonia\Point $point
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PathContainsCore($path, $point){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function Intersect($geometry){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @return \Avalonia\Rect
	 */
	public  function GetRenderBounds($pen){}
	/**
	 * @param \Avalonia\Matrix $transform
	 * @return \Avalonia\Platform\ITransformedGeometryImpl
	 */
	public  function WithTransform($transform){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 * @return \System\Boolean
	 */
	public  function TryGetPointAtDistance($distance, $point){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 * @param \Avalonia\Point& $tangent
	 * @return \System\Boolean
	 */
	public  function TryGetPointAndTangentAtDistance($distance, $point, $tangent){}
	/**
	 * @param \System\Double|double $startDistance
	 * @param \System\Double|double $stopDistance
	 * @param \System\Boolean $startOnBeginFigure
	 * @param \Avalonia\Platform\IGeometryImpl& $segmentGeometry
	 * @return \System\Boolean
	 */
	public  function TryGetSegment($startDistance, $stopDistance, $startOnBeginFigure, $segmentGeometry){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateCaches(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
