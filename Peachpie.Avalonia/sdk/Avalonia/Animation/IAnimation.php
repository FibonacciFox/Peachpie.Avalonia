<?php
namespace Avalonia\Animation;
/**
 */
interface IAnimation
{
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match
	 * @param \System\Action $onComplete
	 */
	protected function Apply($control, $clock, $match, $onComplete);
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Threading\CancellationToken $cancellationToken
	 */
	protected function RunAsync($control, $clock, $cancellationToken);
}
