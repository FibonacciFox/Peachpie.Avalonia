<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 */
class LeastSquaresSolver extends \System\Object
{
	/**
	 * @param \System\Int32|int $degree
	 * @param \System\ReadOnlySpan_1 $x
	 * @param \System\ReadOnlySpan_1 $y
	 * @param \System\ReadOnlySpan_1 $w
	 * @return \Avalonia\Input\GestureRecognizers\PolynomialFit
	 */
	public static function Solve($degree, $x, $y, $w){}
	/**
	 * @param \System\Span_1 $v1
	 * @param \System\Span_1 $v2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Multiply($v1, $v2){}
	/**
	 * @param \System\Span_1 $v
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Norm($v){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
