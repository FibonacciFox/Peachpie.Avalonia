<?php
namespace Avalonia\Animation\Easings;
/**
 */
class CubicBezier extends \System\ValueType
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $RangeMin;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $RangeMax;
	/**
	 * @param \System\Double|double $t
	 * @return \System\Double|double
	 */
	public  function SampleCurveX($t){}
	/**
	 * @param \System\Double|double $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SampleCurveY($t){}
	/**
	 * @param \System\Double|double $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SampleCurveDerivativeX($t){}
	/**
	 * @param \System\Double|double $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SampleCurveDerivativeY($t){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $epsilon
	 * @return \System\Double|double
	 */
	public  function SolveWithEpsilon($x, $epsilon){}
	/**
	 * @param \System\Double|double $p1x
	 * @param \System\Double|double $p1y
	 * @param \System\Double|double $p2x
	 * @param \System\Double|double $p2y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitCoefficients($p1x, $p1y, $p2x, $p2y){}
	/**
	 * @param \System\Double|double $p1x
	 * @param \System\Double|double $p1y
	 * @param \System\Double|double $p2x
	 * @param \System\Double|double $p2y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitGradients($p1x, $p1y, $p2x, $p2y){}
	/**
	 * @param \System\Double|double $p1y
	 * @param \System\Double|double $p2y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitRange($p1y, $p2y){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitSpline(){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $epsilon
	 * @return \System\Double|double
	 */
	public  function SolveCurveX($x, $epsilon){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public  function Solve($x){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $epsilon
	 * @return \System\Double|double
	 */
	public  function SlopeWithEpsilon($x, $epsilon){}
	/**
	 * @param \System\Double|double $x
	 * @return \System\Double|double
	 */
	public  function Slope($x){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RangeMin(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RangeMax(){}
}
