<?php
namespace Avalonia\Data;
/**
 */
interface IBinding
{
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 */
	public function Initiate($target, $targetProperty, $anchor, $enableDataValidation);
}
