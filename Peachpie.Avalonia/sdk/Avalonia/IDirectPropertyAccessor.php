<?php
namespace Avalonia;
/**
 */
interface IDirectPropertyAccessor
{
	/**
	 */
	public function get_IsReadOnly();
	/**
	 */
	public function get_Owner();
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 */
	public function GetValue($instance);
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Object|object $value
	 */
	public function SetValue($instance, $value);
}
