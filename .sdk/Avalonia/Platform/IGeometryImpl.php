<?php
namespace Avalonia\Platform;
interface IGeometryImpl
{


	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @return \Avalonia\Rect
	 */
	public function GetRenderBounds($pen);
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function FillContains($point);
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $geometry
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public function Intersect($geometry);
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function StrokeContains($pen, $point);
	/**
	 * @param \Avalonia\Matrix $transform
	 * @return \Avalonia\Platform\ITransformedGeometryImpl
	 */
	public function WithTransform($transform);
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& &$point
	 * @return \System\Boolean|bool
	 */
	public function TryGetPointAtDistance($distance, &$point);
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& &$point
	 * @param \Avalonia\Point& &$tangent
	 * @return \System\Boolean|bool
	 */
	public function TryGetPointAndTangentAtDistance($distance, &$point, &$tangent);
	/**
	 * @param \System\Double|double $startDistance
	 * @param \System\Double|double $stopDistance
	 * @param \System\Boolean|bool $startOnBeginFigure
	 * @param \Avalonia\Platform\IGeometryImpl& &$segmentGeometry
	 * @return \System\Boolean|bool
	 */
	public function TryGetSegment($startDistance, $stopDistance, $startOnBeginFigure, &$segmentGeometry);
}