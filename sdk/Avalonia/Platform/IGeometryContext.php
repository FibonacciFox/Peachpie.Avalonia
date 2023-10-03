<?php
namespace Avalonia\Platform;
/**
 */
interface IGeometryContext
{
	/**
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $rotationAngle
	 * @param \System\Boolean $isLargeArc
	 * @param \Avalonia\Media\SweepDirection $sweepDirection
	 */
	public function ArcTo($point, $size, $rotationAngle, $isLargeArc, $sweepDirection);
	/**
	 * @param \Avalonia\Point $startPoint
	 * @param \System\Boolean $isFilled
	 */
	public function BeginFigure($startPoint, $isFilled);
	/**
	 * @param \Avalonia\Point $point1
	 * @param \Avalonia\Point $point2
	 * @param \Avalonia\Point $point3
	 */
	public function CubicBezierTo($point1, $point2, $point3);
	/**
	 * @param \Avalonia\Point $control
	 * @param \Avalonia\Point $endPoint
	 */
	public function QuadraticBezierTo($control, $endPoint);
	/**
	 * @param \Avalonia\Point $point
	 */
	public function LineTo($point);
	/**
	 * @param \System\Boolean $isClosed
	 */
	public function EndFigure($isClosed);
	/**
	 * @param \Avalonia\Media\FillRule $fillRule
	 */
	public function SetFillRule($fillRule);
}
