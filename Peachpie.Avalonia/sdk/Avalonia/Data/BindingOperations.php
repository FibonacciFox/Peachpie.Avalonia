<?php
namespace Avalonia\Data;
/**
 */
class BindingOperations extends \System\Object
{
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\InstancedBinding $binding
	 * @param \System\Object|object $anchor
	 * @return \System\IDisposable
	 */
	public static function Apply($target, $property, $binding, $anchor){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
