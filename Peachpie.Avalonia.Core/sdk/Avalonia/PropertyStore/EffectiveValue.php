<?php
namespace Avalonia\PropertyStore;
/**
 */
class EffectiveValue extends \System\Object
{
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Data\BindingPriority $value
	 * @return \System\Void|void
	 */
	protected  function set_Priority($value){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_BasePriority(){}
	/**
	 * @param \Avalonia\Data\BindingPriority $value
	 * @return \System\Void|void
	 */
	protected  function set_BasePriority($value){}
	/**
	 * @return \Avalonia\PropertyStore\IValueEntry
	 */
	public  function get_ValueEntry(){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ValueEntry($value){}
	/**
	 * @return \Avalonia\PropertyStore\IValueEntry
	 */
	public  function get_BaseValueEntry(){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_BaseValueEntry($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasCoercion(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_HasCoercion($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOverridenCurrentValue(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsOverridenCurrentValue($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCoercedDefaultValue(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsCoercedDefaultValue($value){}
	/**
	 * @param \System\Boolean $clearLocalValue
	 * @return \System\Void|void
	 */
	public  function BeginReevaluation($clearLocalValue){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function EndReevaluation($owner, $property){}
	/**
	 * @return \System\Boolean
	 */
	public  function CanRemove(){}
	/**
	 * @return \System\Void|void
	 */
	public  function UnsubscribeIfNecessary(){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	public  function SetAndRaise($owner, $value, $priority){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 * @return \System\Void|void
	 */
	public  function RaiseInheritedValueChanged($owner, $property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function RemoveAnimationAndRaise($owner, $property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function CoerceValue($owner, $property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function DisposeAndRaiseUnset($owner, $property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	protected  function CoerceDefaultValueAndRaise($owner, $property){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetBoxedValue(){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	protected  function UpdateValueEntry($entry, $priority){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
