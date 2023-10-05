<?php
namespace Avalonia\Automation;
/**
 */
class AutomationPropertyChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Automation\AutomationProperty
	 * @property
	 */
	public readonly $Property;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $OldValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $NewValue;
	/**
	 * @return \Avalonia\Automation\AutomationProperty
	 */
	public  function get_Property(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_OldValue(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_NewValue(){}
}
