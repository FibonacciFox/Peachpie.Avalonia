<?php
namespace Avalonia\Styling;
/**
 */
class PropertySetterTemplateInstance extends \System\Object implements 
	\Avalonia\PropertyStore\IValueEntry,
	\Avalonia\Styling\ISetterInstance
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasValue;
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public readonly $Property;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @return \System\Object|object
	 */
	public  function GetValue(){}
	/**
	 * @param \Avalonia\Data\BindingValueType& $state
	 * @param \System\Exception& $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataValidationState($state, $error){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Unsubscribe(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
