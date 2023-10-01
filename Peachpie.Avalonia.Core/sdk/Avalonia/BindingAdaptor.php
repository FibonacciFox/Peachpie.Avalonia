<?php
namespace Avalonia;
/**
 */
class BindingAdaptor extends \System\Object implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
