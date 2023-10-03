<?php
namespace Avalonia\Automation;
/**
 */
class AutomationPropertyChangedEventArgs extends \System\EventArgs
{
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
