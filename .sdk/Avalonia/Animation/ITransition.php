<?php
namespace Avalonia\Animation;
interface ITransition
{


	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 * @return \System\IDisposable
	 */
	protected function Apply($control, $clock, $oldValue, $newValue);
}