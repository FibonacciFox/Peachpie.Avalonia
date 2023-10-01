<?php
namespace Avalonia\Animation;
/**
 */
interface IAnimationSetter
{
	/**
	 */
	public function get_Property();
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 */
	public function set_Property($value);
	/**
	 */
	public function get_Value();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_Value($value);
}
