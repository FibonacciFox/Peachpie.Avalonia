<?php
namespace Avalonia;
/**
 */
class AvaloniaPropertyChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\AvaloniaObject
	 * @property
	 */
	public readonly $Sender;
	/**
	 * @var \Avalonia\AvaloniaProperty
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
	 * @var \Avalonia\Data\BindingPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @return \Avalonia\AvaloniaObject
	 */
	public  function get_Sender(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
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
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Data\BindingPriority $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Priority($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsEffectiveValueChange(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsEffectiveValueChange($value){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	protected  function GetProperty(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetOldValue(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetNewValue(){}
}
