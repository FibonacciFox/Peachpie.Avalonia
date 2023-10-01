<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaPropertyChangedEventArgs_1MethodsOverride
{
	/**
	 * @return \Avalonia\AvaloniaProperty_1
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_2(){}
	/**
	 * @return \Avalonia\Data\Optional_1
	 */
	#[MethodOverride] public  function get_OldValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_OldValue_2(){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public  function get_NewValue_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_NewValue_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AvaloniaPropertyChangedEventArgs_1 extends \Avalonia\AvaloniaPropertyChangedEventArgs
{
	/**
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_Property_1 ()
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_OldValue_1 ()
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_OldValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_OldValue(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\Optional_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OldValue($value){}
	/**
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_NewValue_1 ()
	 * @uses AvaloniaPropertyChangedEventArgs_1MethodsOverride::get_NewValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_NewValue(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_NewValue($value){}
}
