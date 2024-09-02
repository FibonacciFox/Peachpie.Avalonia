<?php
namespace Avalonia\Data;
class BindingOperations extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	public static $DoNothing;
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\InstancedBinding $binding
	 * @param \System\Object|object $anchor
	 * @return \System\IDisposable
	 */
	public static function Apply($target, $property, $binding, $anchor){}
}