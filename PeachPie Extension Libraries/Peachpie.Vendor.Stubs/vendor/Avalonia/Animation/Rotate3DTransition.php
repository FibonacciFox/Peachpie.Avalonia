<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RelativePointTransitionOverride {
	/**
	 * @param \System\TimeSpan $duration
	 * @param \Avalonia\Animation\PageSlide+SlideAxis $orientation
	 * @param \System\Nullable_1 $depth [generic: System\Double]
	 */
	#[MethodOverride]public function __construct_1 ($duration, $orientation, $depth){}
	/**
	 */
	#[MethodOverride]public function __construct_2 (){}
}
class Rotate3DTransition extends \Avalonia\Animation\PageSlide implements
	\Avalonia\Animation\IPageTransition
{
	use RelativePointTransitionOverride;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Double]
	 */
	public $Depth;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \Avalonia\Animation\PageSlide+SlideAxis
	 */
	public $Orientation;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $SlideInEasing;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $SlideOutEasing;
	/**
	 * @uses Rotate3DTransitionOverride::__construct_1 <br>public , args: ($duration, $orientation, $depth)<br>
	 * @uses Rotate3DTransitionOverride::__construct_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}