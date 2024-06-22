<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeySplineTypeConverterOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\TimeSpan $duration
	 * @param \Avalonia\Animation\PageSlide+SlideAxis $orientation
	 */
	#[MethodOverride]public function __construct_2 ($duration, $orientation){}
}
class PageSlide extends \System\Object implements
	\Avalonia\Animation\IPageTransition
{
	use KeySplineTypeConverterOverride;

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
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean|bool $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	public function Start($from, $to, $forward, $cancellationToken){}
	/**
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @return \Avalonia\Visual
	 */
	protected static function GetVisualParent($from, $to){}
	/**
	 * @uses PageSlideOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PageSlideOverride::__construct_2 <br>public , args: ($duration, $orientation)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}