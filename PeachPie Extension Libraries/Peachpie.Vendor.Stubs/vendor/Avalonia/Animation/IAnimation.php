<?php
namespace Avalonia\Animation;
interface IAnimation
{

	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match [generic: System\Boolean]
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	protected function Apply($control, $clock, $match, $onComplete);
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	protected function RunAsync($control, $clock, $cancellationToken);
}