<?php
namespace Avalonia\Animation;
/**
 */
interface IAnimator
{
	/**
	 */
	public function get_Property();
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 */
	public function set_Property($value);
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match
	 * @param \System\Action $onComplete
	 */
	public function Apply($animation, $control, $clock, $match, $onComplete);
}
