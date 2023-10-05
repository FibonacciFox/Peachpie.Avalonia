<?php
namespace Avalonia\Animation;
/**
 */
class Rotate3DTransition extends \Avalonia\Animation\PageSlide implements 
	\Avalonia\Animation\IPageTransition
{
	/**
	 * @var \System\Nullable_1[System\Double]
	 * @property
	 */
	public $Depth;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Duration;
	/**
	 * @var \Avalonia\Animation\PageSlide+SlideAxis
	 * @property
	 */
	public $Orientation;
	/**
	 * @var \Avalonia\Animation\Easings\Easing
	 * @property
	 */
	public $SlideInEasing;
	/**
	 * @var \Avalonia\Animation\Easings\Easing
	 * @property
	 */
	public $SlideOutEasing;
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Depth(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Depth($value){}
}
