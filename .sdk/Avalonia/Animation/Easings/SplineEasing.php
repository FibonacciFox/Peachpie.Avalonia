<?php
namespace Avalonia\Animation\Easings;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EasingTypeConverterOverride {
	/**
	 * @param \System\Double|double $x1
	 * @param \System\Double|double $y1
	 * @param \System\Double|double $x2
	 * @param \System\Double|double $y2
	 */
	#[MethodOverride]public function __construct_1 ($x1, $y1, $x2, $y2){}
	/**
	 * @param \Avalonia\Animation\KeySpline $keySpline
	 */
	#[MethodOverride]public function __construct_2 ($keySpline){}
	/**
	 */
	#[MethodOverride]public function __construct_3 (){}
}
class SplineEasing extends \Avalonia\Animation\Easings\Easing implements
	\Avalonia\Animation\Easings\IEasing
{
	use EasingTypeConverterOverride;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $X1;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Y1;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $X2;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Y2;
	/**
	 * @uses SplineEasingOverride::__construct_1 <br>public , args: ($x1, $y1, $x2, $y2)<br>
	 * @uses SplineEasingOverride::__construct_2 <br>public , args: ($keySpline)<br>
	 * @uses SplineEasingOverride::__construct_3 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}