<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpanRiderOverride {
	/**
	 * @param \System\TimeSpan $period
	 * @param \System\Double|double $zeta
	 * @param \System\Double|double $initialVelocity
	 */
	#[MethodOverride]public function __construct_1 ($period, $zeta, $initialVelocity){}
	/**
	 * @param \System\Double|double $m
	 * @param \System\Double|double $k
	 * @param \System\Double|double $c
	 * @param \System\Double|double $initialVelocity
	 */
	#[MethodOverride]public function __construct_2 ($m, $k, $c, $initialVelocity){}
	/**
	 * @param \System\Double|double $ωn
	 * @param \System\Double|double $zeta
	 * @param \System\Double|double $initialVelocity
	 */
	#[MethodOverride]public function __construct_3 ($ωn, $zeta, $initialVelocity){}
}
final class SpringSolver extends \System\ValueType
{
	use SpanRiderOverride;

	/**
	 * @param \System\Double|double $t
	 * @return \System\Double|double
	 */
	public function Solve($t){}
	/**
	 * @uses SpringSolverOverride::__construct_1 <br>public , args: ($period, $zeta, $initialVelocity)<br>
	 * @uses SpringSolverOverride::__construct_2 <br>public , args: ($m, $k, $c, $initialVelocity)<br>
	 * @uses SpringSolverOverride::__construct_3 <br>public , args: ($ωn, $zeta, $initialVelocity)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}