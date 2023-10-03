<?php
namespace Avalonia\Animation;
/**
 */
interface ITransition
{
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 */
	protected function Apply($control, $clock, $oldValue, $newValue);
	/**
	 */
	public function get_Property();
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 */
	public function set_Property($value);
}
