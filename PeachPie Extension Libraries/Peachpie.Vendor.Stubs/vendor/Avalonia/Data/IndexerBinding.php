<?php
namespace Avalonia\Data;
class IndexerBinding extends \System\Object implements
	\Avalonia\Data\IBinding
{
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean|bool $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \Avalonia\AvaloniaObject $source
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingMode $mode
	 */
	public function __construct($source, $property, $mode){}
}