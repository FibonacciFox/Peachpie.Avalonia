<?php
namespace Avalonia\Data\Core;
class PropertyPropertyPathElement extends \System\Object implements
	\Avalonia\Data\Core\IPropertyPathElement
{

	/**
	 * @property
	 * @var \Avalonia\Data\Core\IPropertyInfo
	 * @since readonly
	 */
	public $Property;
	/**
	 * @param \Avalonia\Data\Core\IPropertyInfo $property
	 */
	public function __construct($property){}
}