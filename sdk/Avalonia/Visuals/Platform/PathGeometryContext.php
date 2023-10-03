<?php
namespace Avalonia\Visuals\Platform;
/**
 */
class PathGeometryContext extends \System\Object implements 
	\Avalonia\Platform\IGeometryContext,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $rotationAngle
	 * @param \System\Boolean $isLargeArc
	 * @param \Avalonia\Media\SweepDirection $sweepDirection
	 * @return \System\Void|void
	 */
	public  function ArcTo($point, $size, $rotationAngle, $isLargeArc, $sweepDirection){}
	/**
	 * @param \Avalonia\Point $startPoint
	 * @param \System\Boolean $isFilled
	 * @return \System\Void|void
	 */
	public  function BeginFigure($startPoint, $isFilled){}
	/**
	 * @param \Avalonia\Point $point1
	 * @param \Avalonia\Point $point2
	 * @param \Avalonia\Point $point3
	 * @return \System\Void|void
	 */
	public  function CubicBezierTo($point1, $point2, $point3){}
	/**
	 * @param \Avalonia\Point $control
	 * @param \Avalonia\Point $endPoint
	 * @return \System\Void|void
	 */
	public  function QuadraticBezierTo($control, $endPoint){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Void|void
	 */
	public  function LineTo($point){}
	/**
	 * @param \System\Boolean $isClosed
	 * @return \System\Void|void
	 */
	public  function EndFigure($isClosed){}
	/**
	 * @param \Avalonia\Media\FillRule $fillRule
	 * @return \System\Void|void
	 */
	public  function SetFillRule($fillRule){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfDisposed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CurrentFigureSegments(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
