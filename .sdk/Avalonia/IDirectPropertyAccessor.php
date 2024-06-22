<?php
namespace Avalonia;
interface IDirectPropertyAccessor
{


	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @return \System\Object|object
	 */
	public function GetValue($instance);
	/**
	 * @param \Avalonia\AvaloniaObject $instance
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function SetValue($instance, $value);
}