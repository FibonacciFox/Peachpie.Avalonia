<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SetterMethodsOverride
{
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_2(){}
}
/**
 */
class Setter extends \Avalonia\Styling\SetterBase implements 
	\Avalonia\PropertyStore\IValueEntry,
	\Avalonia\Styling\ISetterInstance,
	\Avalonia\Animation\IAnimationSetter
{
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public $Property;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Value;
	/**
	 * @uses SetterMethodsOverride::get_Property_1 ()
	 * @uses SetterMethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 * @return \System\Void|void
	 */
	public  function set_Property($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Unsubscribe(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValue(){}
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
	#[MethodPrivate]  function EnsureProperty(){}
	/**
	 * @param \Avalonia\Styling\StyleInstance $instance
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Data\IBinding $binding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetBinding($instance, $target, $binding){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDirectValue($target){}
}
