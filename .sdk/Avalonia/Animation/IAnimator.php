<?php
namespace Avalonia\Animation;
interface IAnimator
{

	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match [generic: System\Boolean]
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	public function Apply($animation, $control, $clock, $match, $onComplete);
}