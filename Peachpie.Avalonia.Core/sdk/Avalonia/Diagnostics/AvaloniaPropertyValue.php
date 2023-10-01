<?php
namespace Avalonia\Diagnostics;
/**
 */
class AvaloniaPropertyValue extends \System\Object
{
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Diagnostic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOverriddenCurrentValue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
