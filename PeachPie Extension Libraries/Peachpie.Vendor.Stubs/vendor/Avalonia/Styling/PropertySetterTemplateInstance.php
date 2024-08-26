<?php
namespace Avalonia\Styling;
class PropertySetterTemplateInstance extends \System\Object implements
	\Avalonia\PropertyStore\IValueEntry,
	\Avalonia\Styling\ISetterInstance
{
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @return \System\Boolean|bool
	 */
	public function HasValue(){}
	/**
	 * @return \System\Object|object
	 */
	public function GetValue(){}
	private function GetDataValidationState(&$state, &$error){}
	private function Unsubscribe(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Styling\ITemplate $template
	 */
	public function __construct($property, $template){}
}