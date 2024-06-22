<?php
namespace Avalonia\Automation;
class AutomationPropertyChangedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Automation\AutomationProperty
	 * @since readonly
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $OldValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $NewValue;
	/**
	 * @param \Avalonia\Automation\AutomationProperty $property
	 * @param \System\Object|object $oldValue
	 * @param \System\Object|object $newValue
	 */
	public function __construct($property, $oldValue, $newValue){}
}