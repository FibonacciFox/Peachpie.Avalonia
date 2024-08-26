<?php
namespace Avalonia\Styling;
class PropertyEqualsSelector extends \Avalonia\Styling\Selector
{

	/**
	 * @param \System\Type $propertyType
	 * @param \System\Object|object $propertyValue
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	protected static function Compare($propertyType, $propertyValue, $value){}
	/**
	 * @param \Avalonia\Styling\Selector $previous
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 */
	public function __construct($previous, $property, $value){}
}