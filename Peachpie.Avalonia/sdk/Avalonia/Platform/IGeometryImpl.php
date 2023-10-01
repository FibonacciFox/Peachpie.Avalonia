<?php
namespace Avalonia\Platform;
/**
 */
interface IGeometryImpl
{
	/**
	 */
	public function get_Bounds();
	/**
	 */
	public function get_ContourLength();
	/**
	 * @param \Avalonia\Media\IPen $pen
	 */
	public function GetRenderBounds($pen);
	/**
	 * @param \Avalonia\Point $point
	 */
	public function FillContains($point);
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 */
	public function Intersect($geometry);
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $point
	 */
	public function StrokeContains($pen, $point);
	/**
	 * @param \Avalonia\Matrix $transform
	 */
	public function WithTransform($transform);
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 */
	public function TryGetPointAtDistance($distance, $point);
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 * @param \Avalonia\Point& $tangent
	 */
	public function TryGetPointAndTangentAtDistance($distance, $point, $tangent);
	/**
	 * @param \System\Double|double $startDistance
	 * @param \System\Double|double $stopDistance
	 * @param \System\Boolean $startOnBeginFigure
	 * @param \Avalonia\Platform\IGeometryImpl& $segmentGeometry
	 */
	public function TryGetSegment($startDistance, $stopDistance, $startOnBeginFigure, $segmentGeometry);
}
